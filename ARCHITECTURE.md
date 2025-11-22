# DoctorantAI - Complete Architecture Guide

This document provides an in-depth explanation of the Doctorant Track  system architecture, components, and workflows.

---

## Table of Contents

1. [Big Picture](#big-picture)
2. [Core Architecture](#core-architecture)
3. [Key Components](#key-components)
4. [Data Flow & Communication](#data-flow--communication)
5. [Tech Stack](#tech-stack)
6. [Execution Flow](#execution-flow)
7. [Routes Reference](#routes-reference)
8. [Database Schema](#database-schema)
9. [Middleware & Security](#middleware--security)
10. [File Upload System](#file-upload-system)
11. [State Machine](#state-machine)

---

## Big Picture

### What Type of Project?

**DoctorantAI** is a **server-side rendered web application** built with Laravel 11, serving as a comprehensive management system for PhD candidature (doctorant) applications.

### What Problem Does It Solve?

Universities need a centralized system to:

- ✅ Register and authenticate doctoral candidates
- ✅ Collect personal and thesis information from applicants
- ✅ Manage thesis document submissions
- ✅ Allow administrators to review and approve/reject applications
- ✅ Track application status through the entire workflow
- ✅ Provide feedback (rejection reasons) to unsuccessful candidates
- ✅ Secure document storage and retrieval

**Traditional Solution**: Paper-based forms, email submissions, manual tracking → **Time-consuming, error-prone, unorganized**

**DoctorantAI Solution**: Centralized web platform with role-based access, automated workflows, document management → **Efficient, organized, traceable**

---

## Core Architecture

### High-Level Structure: **Monolithic MVC Pattern**

```
Request Flow:
═════════════

User Browser
    ↓ (HTTP Request)
    ↓
Routes (routes/web.php)
    ↓ (Route Matching)
    ↓
Middleware (Authentication, Authorization)
    ↓ (Access Check)
    ↓
Controller (Business Logic)
    ↓ (Data Processing)
    ↓
Model (Database Operations)
    ↓ (Query Execution)
    ↓
View (Blade Template Rendering)
    ↓ (HTML Generation)
    ↓
HTTP Response
    ↓ (Rendered HTML)
    ↓
User Browser (Display Page)
```

### Directory Organization

```
MVC Layers in appg/:

MODEL LAYER
├── app/Models/User.php
└── database/migrations/
    └── 0001_01_01_000000_create_users_table.php

VIEW LAYER
├── resources/views/
│   ├── dashfinal/admin/
│   ├── dashfinal/user/
│   └── layouts/homepage/

CONTROLLER LAYER
├── app/Http/Controllers/
│   ├── Admin/DashboardController.php
│   ├── User/HomeController.php
│   ├── User/profileController.php
│   └── User/zipController.php

ROUTING & MIDDLEWARE
├── routes/web.php
└── app/Http/Middleware/
    ├── IsAdmin.php
    ├── soumis.php
    └── (Auth & others)
```

---

## Key Components

### 1. **User Model** (`app/Models/User.php`)

The central data model representing both doctorants and admins.

**Responsibilities**:

- Stores all user information (personal, thesis, application state)
- Handles password hashing
- Manages authentication
- Holds file paths for uploads

**Key Fields**:

```php
$fillable = [
    'email', 'password', 'nom', 'prenom',
    'date_de_naissance', 'CIN', 'telephone', 'adresse',
    'titre', 'description', 'laboratoire',
    'date_inscription', 'directeur', 'codirecteur',
    'photo', 'zip_file', 'etat', 'motif_de_refus'
];
```

---

### 2. **DashboardController** (`app/Http/Controllers/Admin/DashboardController.php`)

**Purpose**: Central hub for all admin operations

**Key Methods**:


| Method            | Route                              | Purpose                            |
| ----------------- | ---------------------------------- | ---------------------------------- |
| `dashboard()`     | `/admin/dashboard`                 | Show admin main dashboard          |
| `doctorants()`    | `/admin/doctorants`                | List all doctorants                |
| `details($id)`    | `/admin/details/{id}`              | View full doctorant profile        |
| `infopers($id)`   | `/admin/details/{id}/infopers`     | View personal info                 |
| `infothese($id)`  | `/admin/details/{id}/infothese`    | View thesis info                   |
| `candidature()`   | `/admin/candidature`               | List pending candidatures (etat=1) |
| `accepter($id)`   | `/admin/candidature/{id}/accepter` | Accept application (set etat=2)    |
| `refuser($id)`    | `/admin/candidature/{id}/refuser`  | Reject application (set etat=3)    |
| `motif($id)`      | `/admin/candidature/{id}/motif`    | Show form for rejection reason     |
| `updateMotif()`   | `/admin/candidature/{id}/update`   | Save rejection reason              |
| `showAcceptee()`  | `/admin/candidature/acceptee`      | View accepted apps                 |
| `showRefusee()`   | `/admin/candidature/refusee`       | View rejected apps                 |
| `showEncours()`   | `/admin/candidature/encours`       | View in-progress apps              |
| `showBrouillon()` | `/admin/candidature/brouillon`     | View draft apps                    |
| `download($id)`   | `/doctorants/{id}/zipDownload`     | Download user's ZIP file           |

---

### 3. **HomeController** (`app/Http/Controllers/User/HomeController.php`)

**Purpose**: User dashboard entry point

**Key Methods**:

```php
public function index()
{
    $user = auth()->user();
    return view('dashfinal.user.user-main', compact('user'));
}
```

- Authenticates user is logged in
- Loads current user
- Returns user dashboard view

---

### 4. **profileController** (`app/Http/Controllers/User/profileController.php`)

**Purpose**: Handle profile editing workflows

**Key Methods**:


| Method         | Purpose                                                    |
| -------------- | ---------------------------------------------------------- |
| `edit()`       | Show profile edit form                                     |
| `update()`     | Save profile changes (validation via updateProfileRequest) |
| `completer()`  | Show incomplete profile prompt                             |
| `mettreEtat()` | Change application state to 1 (submitted)                  |

**Validation Rules** (from updateProfileRequest):

```
prenom - required|string
nom - required|string
CIN - required|string
date_de_naissance - required|date
telephone - required|string
adresse - required|string
```

---

### 5. **zipController** (`app/Http/Controllers/User/zipController.php`)

**Purpose**: Manage file uploads and downloads

**Key Methods**:


| Method          | Purpose              | File Storage                                         |
| --------------- | -------------------- | ---------------------------------------------------- |
| `edit()`        | Show upload form     | -                                                    |
| `upload()`      | Process ZIP upload   | `public/uploads/doctorants/zipFiles/{timestamp}.zip` |
| `show()`        | Show download page   | -                                                    |
| `download()`    | Download user's ZIP  | Response with file                                   |
| `telecharger()` | Download sample docs | `public/fichier-a-telecharger/telecharger.zip`       |

**Upload Validation**:

```php
'zip_file' => 'nullable|mimes:zip'
```

**Upload Process**:

1. Check if file exists
2. Get original extension
3. Generate timestamp filename
4. Move to storage directory
5. Delete old file if exists
6. Save path to `user->zip_file`

---

### 6. **Middleware Components**

#### IsAdmin.php

```php
// Restricts access to admin routes
if(auth()->check() && auth()->user()->is_admin == 1)
    return $next($request);  // Allow
else
    return to_route('user.home');  // Redirect to user home
```

#### soumis.php

```php
// Allows editing only when etat = 0 (draft)
if(auth()->check() && auth()->user()->etat == 0)
    return $next($request);  // Allow
else
    return to_route('user.home');  // Redirect to home
```

---

## Data Flow & Communication

### Complete Request-Response Cycle Example

**Scenario: Admin Accepts a Candidature**

```
1. Admin clicks "Accept" button
   └─→ GET /admin/candidature/123/accepter

2. Laravel router matches route
   └─→ Route::get('/admin/candidature/{id}/accepter', 
       [DashboardController::class, 'accepter'])
       ->middleware('is_admin')

3. Middleware chain executes
   ├─→ auth() - User logged in? ✓
   └─→ is_admin - User is admin? ✓

4. Controller method executes
   └─→ DashboardController::accepter($id)

5. Controller logic
   ├─→ $user = User::findOrFail(123)
   ├─→ $user->etat = 2
   └─→ $user->save()

6. Alert notification
   └─→ Alert::success('Succès', 'Le doctorant a été accépté avec succès')

7. Response sent
   └─→ return redirect()->back()

8. Browser receives response
   └─→ Page refreshes with success alert
```

### Component Interactions

```
Doctorant User Journey:
══════════════════════

Browser → Routes → Auth Middleware → Soumis Middleware → profileController
                                                              ↓
                                                        Model: User
                                                              ↓
                                                          Database
                                                              ↓
                                                    Return Data
                                                              ↓
                                                      Blade View
                                                              ↓
                                                    HTML Response
                                                              ↓
                                                        Browser


Admin Workflow:
═══════════════

Browser → Routes → Auth Middleware → IsAdmin Middleware → DashboardController
                                                              ↓
                                                    Query: User::where()
                                                              ↓
                                                          Database
                                                              ↓
                                                    Return Collection
                                                              ↓
                                                      Blade View
                                                              ↓
                                                    HTML Response
                                                              ↓
                                                        Browser
```

---

## Tech Stack

### Backend


| Component | Technology | Version  | Purpose               |
| --------- | ---------- | -------- | --------------------- |
| Framework | Laravel    | 11.0     | Web framework         |
| Language  | PHP        | 8.2+     | Server-side language  |
| ORM       | Eloquent   | Built-in | Database abstraction  |
| Template  | Blade      | Built-in | Server-side rendering |
| UI Alerts | SweetAlert | 7.1      | User notifications    |

### Frontend


| Component        | Technology             | Version | Purpose             |
| ---------------- | ---------------------- | ------- | ------------------- |
| CSS Framework    | Bootstrap              | 5.2.3   | UI components       |
| CSS Preprocessor | Sass                   | 1.56.1  | Advanced styling    |
| Build Tool       | Vite                   | 5.0     | Asset bundling      |
| JavaScript       | Vanilla JS + Bootstrap | -       | Client interactions |

### Database


| Option | Status                | Configuration               |
| ------ | --------------------- | --------------------------- |
| SQLite | Default (development) | `.env DB_CONNECTION=sqlite` |
| MySQL  | Optional (production) | `.env DB_CONNECTION=mysql`  |

---

## Execution Flow

### Scenario 1: New User Registration Flow

```
START: User visits homepage
│
├─→ Routes: GET / → view('layouts.homepage.main')
│
├─→ User clicks "Register"
│
├─→ Routes: GET /register → Laravel Auth scaffolding
│
├─→ Registration form displayed
│   ├─ Email (unique)
│   ├─ Password
│   ├─ Name (nom, prenom)
│   ├─ CIN (unique)
│   ├─ Phone (unique)
│   └─ Address
│
├─→ User submits form
│
├─→ Routes: POST /register → Laravel RegisterController
│
├─→ Validation executes
│
├─→ User created in database
│   └─ etat = 0 (Draft)
│   └─ is_admin = 0 (Doctorant)
│
├─→ User logged in automatically
│
├─→ Redirect to /home
│
└─→ END: User on dashboard
```

### Scenario 2: User Submits Application

```
START: Doctorant on /home dashboard (etat = 0)
│
├─→ User clicks "Edit Profile"
│
├─→ Routes: GET /home/profile/edit
│   └─ Middleware: soumis (etat == 0 ✓)
│
├─→ profileController::edit() executed
│
├─→ Form displayed with current data
│
├─→ User fills form:
│   ├─ Personal: nom, prenom, CIN, date_de_naissance, telephone, adresse
│   └─ Thesis: titre, description, laboratoire, date_inscription, directeur, codirecteur
│
├─→ User clicks "Save"
│
├─→ Routes: PUT /home/profile/update
│   └─ Middleware: soumis (etat == 0 ✓)
│
├─→ profileController::update() executed
│
├─→ Validation via updateProfileRequest
│
├─→ Data saved to database
│
├─→ Success alert shown
│
├─→ User goes to /home/uploadpage
│
├─→ Routes: GET /home/uploadpage
│   └─ Middleware: soumis (etat == 0 ✓)
│
├─→ zipController::edit() executed
│
├─→ Upload form displayed
│
├─→ User selects ZIP file
│
├─→ User clicks "Upload"
│
├─→ Routes: PUT /home/zipUpload
│   └─ Middleware: soumis (etat == 0 ✓)
│
├─→ zipController::upload() executed
│
├─→ ZIP validation (must be .zip file)
│
├─→ File moved to: public/uploads/doctorants/zipFiles/{timestamp}.zip
│
├─→ Old file deleted if exists
│
├─→ Path saved to user->zip_file
│
├─→ Success alert shown
│
├─→ User ready to submit
│
├─→ User clicks "Submit Application"
│
├─→ Routes: POST /home/mettreEtat
│
├─→ profileController::mettreEtat() executed
│   ├─ $user->etat = 1 (Submitted)
│   └─ $user->save()
│
├─→ Success alert: "Soummis avec succès"
│
└─→ END: Application submitted (etat = 1)
       User can no longer edit (soumis middleware blocks)
```

### Scenario 3: Admin Reviews & Makes Decision

```
START: Admin on /admin/candidature page (shows etat = 1)
│
├─→ Routes: GET /admin/candidature
│   └─ Middleware: is_admin (is_admin == 1 ✓)
│
├─→ DashboardController::candidature() executed
│   └─ $users = User::where('etat', 1)->get()
│
├─→ List of pending candidatures displayed
│
├─→ Admin clicks on doctorant
│
├─→ Routes: GET /admin/details/123
│   └─ Middleware: is_admin
│
├─→ DashboardController::details(123) executed
│
├─→ Full profile displayed with all details
│
├─→ Admin reviews personal info and thesis details
│
├─→ Admin can view uploaded ZIP file
│
├─→ Admin makes decision:
│
│  IF ACCEPT:
│  ├─→ Click "Accepter"
│  ├─→ Routes: GET /admin/candidature/123/accepter
│  ├─→ DashboardController::accepter(123)
│  ├─→ $user->etat = 2
│  ├─→ $user->save()
│  ├─→ Alert: "Le doctorant a été accépté avec succès"
│  └─→ Redirect to previous page
│
│  IF REJECT:
│  ├─→ Click "Refuser"
│  ├─→ Routes: GET /admin/candidature/123/refuser
│  ├─→ DashboardController::refuser(123)
│  ├─→ $user->etat = 3
│  ├─→ $user->save()
│  ├─→ Prompted to add rejection reason
│  ├─→ Routes: GET /admin/candidature/123/motif
│  ├─→ Form displayed for rejection reason
│  ├─→ Admin enters reason
│  ├─→ Routes: PUT /admin/candidature/123/update
│  ├─→ DashboardController::updateMotif()
│  ├─→ Validation: motif_de_refus required|string
│  ├─→ $user->motif_de_refus = $request->motif_de_refus
│  ├─→ $user->etat = 3
│  ├─→ $user->save()
│  ├─→ Alert: "Le doctorant a été refusé avec succès"
│  └─→ Redirect to candidature list
│
└─→ END: Decision recorded in database
       Doctorant can view decision
```

---

## Routes Reference

### Public Routes

```php
GET  /              → Homepage
GET  /forget        → Password reset page
GET  /login         → Login form
GET  /register      → Registration form
POST /login         → Process login
POST /register      → Process registration
```

### Authenticated Routes (Both Admin & User)

```php
GET  /home          → User dashboard
```

### Admin-Only Routes (requires is_admin=1)

```php
GET  /admin/dashboard                          → Admin main dashboard
GET  /admin/doctorants                         → List all doctorants
GET  /admin/details/{id}                       → Doctorant details
GET  /admin/details/{id}/infopers              → Personal info view
GET  /admin/details/{id}/infothese             → Thesis info view
GET  /admin/candidature                        → Pending candidatures
GET  /admin/candidature/{id}/accepter          → Accept application
GET  /admin/candidature/{id}/refuser           → Reject application
GET  /admin/candidature/{id}/motif             → Add rejection reason
PUT  /admin/candidature/{id}/update            → Save rejection reason
GET  /admin/candidature/acceptee               → Accepted applications
GET  /admin/candidature/refusee                → Rejected applications
GET  /admin/candidature/encours                → In-progress applications
GET  /admin/candidature/brouillon              → Draft applications
GET  /doctorants/{id}/zipDownload              → Download user ZIP
```

### User Routes (requires auth + role verification)

```php
GET  /home/profile                             → View profile
GET  /home/profile/edit                        → Edit profile (etat=0)
PUT  /home/profile/update                      → Save profile (etat=0)
GET  /home/profile/these                       → View thesis info
GET  /home/these/edit                          → Edit thesis (etat=0)
PUT  /home/these/update                        → Save thesis (etat=0)
GET  /home/uploadpage                          → Upload page (etat=0)
PUT  /home/zipUpload                           → Upload ZIP (etat=0)
GET  /home/downlaodpage                        → Download page
GET  /home/zipDownload                         → Download user ZIP
GET  /home/telecharger                         → Download templates (etat=0)
GET  /home/completer                           → Complete profile prompt (etat=0)
POST /home/mettreEtat                          → Submit application
```

---

## Database Schema

### users Table

```sql
CREATE TABLE users (
    id                      INT PRIMARY KEY AUTO_INCREMENT,
    nom                     VARCHAR(255) NOT NULL,
    prenom                  VARCHAR(255) NOT NULL,
    email                   VARCHAR(255) UNIQUE NOT NULL,
    is_admin                BOOLEAN DEFAULT 0,
    etat                    INT DEFAULT 0,
  
    email_verified_at       TIMESTAMP NULL,
    password                VARCHAR(255) NOT NULL,
  
    CIN                     VARCHAR(255) UNIQUE NOT NULL,
    date_de_naissance       DATE NOT NULL,
  
    telephone               VARCHAR(255) UNIQUE NOT NULL,
    adresse                 VARCHAR(255) NOT NULL,
  
    titre                   VARCHAR(255) NULL,
    description             TEXT NULL,
    laboratoire             VARCHAR(255) NULL,
  
    date_inscription        DATE NULL,
    directeur               VARCHAR(255) NULL,
    codirecteur             VARCHAR(255) NULL,
  
    photo                   VARCHAR(255) NULL,
    zip_file                VARCHAR(255) NULL,
    motif_de_refus          TEXT NULL,
  
    remember_token          VARCHAR(100) NULL,
    created_at              TIMESTAMP,
    updated_at              TIMESTAMP
);
```

### password_reset_tokens Table

```sql
CREATE TABLE password_reset_tokens (
    email       VARCHAR(255) PRIMARY KEY,
    token       VARCHAR(255) NOT NULL,
    created_at  TIMESTAMP NULL
);
```

### sessions Table

```sql
CREATE TABLE sessions (
    id              VARCHAR(255) PRIMARY KEY,
    user_id         INT NULL,
    ip_address      VARCHAR(45) NULL,
    user_agent      TEXT NULL,
    payload         LONGTEXT NOT NULL,
    last_activity   INT NOT NULL
);
```

---

## Middleware & Security

### Authentication Flow

```
Request arrives
    ↓
auth()->check() middleware
    ├─→ Valid session? YES → Continue
    └─→ Valid session? NO → Redirect to /login

After auth passes:
    ↓
Role-based middleware
    ├─→ For Admin routes: is_admin middleware
    │   └─→ is_admin == 1? YES → Continue
    │   └─→ is_admin == 1? NO → Redirect to /home
    │
    └─→ For Edit routes: soumis middleware
        └─→ etat == 0? YES → Continue (can edit)
        └─→ etat == 0? NO → Redirect to /home (submitted)

Route handler executes
```

### Security Measures

1. **Password Security**

   - Hashed with bcrypt (Laravel default)
   - Never stored in plain text
   - `password` field cast as hashed in User model
2. **Session Management**

   - Database-backed sessions
   - Automatic timeout after configured duration
   - CSRF tokens on all forms
3. **Access Control**

   - Route-level middleware
   - Controller-level authorization
   - State-based restrictions (soumis middleware)
4. **Data Validation**

   - Server-side validation on all inputs
   - Request form classes (updateProfileRequest, zipUpdateRequest)
   - File type validation (ZIP only)
5. **File Security**

   - ZIP file type validation
   - Files stored in non-web-accessible directory with alias
   - Timestamped filenames prevent collisions
   - Old files automatically deleted on re-upload

---

## File Upload System

### Directory Structure

```
public/
├── uploads/
│   └── doctorants/
│       └── zipFiles/
│           ├── 1700000001.zip  (User 1)
│           ├── 1700000002.zip  (User 2)
│           └── ...
├── fichier-a-telecharger/
│   └── telecharger.zip  (Sample documents)
└── index.php
```

### Upload Flow

```
User selects file
    ↓
Form submitted: PUT /home/zipUpload
    ↓
zipController::upload() executes
    ├─→ Check if file exists in request ✓
    ├─→ Get file extension
    ├─→ Generate timestamp filename (e.g., 1700000001.zip)
    ├─→ Validate file type (must be .zip)
    ├─→ Move file to: public/uploads/doctorants/zipFiles/
    ├─→ Check if user already has file
    │   └─→ Delete old file if exists
    ├─→ Save new path to user->zip_file
    ├─→ Save user to database
    └─→ Show success alert

Database updated
    └─→ user.zip_file = "uploads/doctorants/zipFiles/1700000001.zip"

Success alert displayed
```

### Download Flow

```
User clicks "Download"
    ↓
GET /home/zipDownload
    ↓
zipController::download() executes
    ├─→ Get current authenticated user
    ├─→ Check if user->zip_file exists
    │   ├─→ YES: return response()->download($userth->zip_file)
    │   └─→ NO: Show error alert, redirect
    │
    └─→ File downloaded to client
```

---

## State Machine

### Application States

```
State 0: DRAFT (Initial)
├─ User can edit all information
├─ User can upload/update files
├─ User cannot view as submitted
└─ Middleware: soumis allows access

                    ↓ (User submits application)

State 1: SUBMITTED (In Review)
├─ User cannot edit anymore
├─ Admin can review all info
├─ Admin can accept or reject
├─ Middleware: soumis blocks further edits
└─ Visible in admin candidature list

        ↙              ↘
    ACCEPT           REJECT
      ↓                ↓

State 2: ACCEPTED          State 3: REJECTED
├─ Final state (READ-ONLY) ├─ Final state (READ-ONLY)
├─ User can view profile   ├─ User can view profile
├─ Indicates approval      ├─ Shows rejection reason
└─ No editing              └─ No editing

View filters by state:
- Admin can filter to see ACCEPTED: etat = 2
- Admin can filter to see REJECTED: etat = 3
- Admin can filter to see PENDING: etat = 1
- Admin can filter to see DRAFT: etat = 0
```

### State Transitions

```
Transition 0 → 1: User calls mettreEtat()
├─ Route: POST /home/mettreEtat
├─ Controller: profileController::mettreEtat()
├─ Action: $user->etat = 1; $user->save();
└─ Result: Application submitted

Transition 1 → 2: Admin accepts
├─ Route: GET /admin/candidature/{id}/accepter
├─ Controller: DashboardController::accepter($id)
├─ Action: $user->etat = 2; $user->save();
└─ Result: Application accepted

Transition 1 → 3: Admin rejects
├─ Route: GET /admin/candidature/{id}/refuser
├─ Controller: DashboardController::refuser($id)
├─ Action: $user->etat = 3; $user->save();
└─ Result: Application rejected

Transition 1 → 3 (with reason): Admin rejects with motif
├─ Route 1: GET /admin/candidature/{id}/motif (form display)
├─ Route 2: PUT /admin/candidature/{id}/update (submit reason)
├─ Controller: DashboardController::updateMotif()
├─ Action: 
│   $user->motif_de_refus = $request->motif_de_refus;
│   $user->etat = 3;
│   $user->save();
└─ Result: Rejected with reason recorded
```

---

## Summary

**Doctorant Track** is a well-structured Laravel MVC application that:

1. ✅ Manages the complete PhD application lifecycle
2. ✅ Provides separate user interfaces for doctorants and admins
3. ✅ Enforces data integrity through validation
4. ✅ Implements role-based and state-based access control
5. ✅ Handles file uploads securely
6. ✅ Maintains clear audit trail through state transitions
7. ✅ Uses standard Laravel patterns and conventions

The architecture is scalable and maintainable, suitable for educational institutions managing doctoral programs.
