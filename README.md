# Doctorant Track -PhD Thesis Candidature Management System ENSAJ

## 📋 Quick Overview

Doctorant Track  is a comprehensive web-based application designed to manage PhD (doctorant) candidature submissions and thesis projects. It provides a centralized platform where doctoral candidates can register, complete personal and thesis information, submit their documentation via ZIP files, and track their candidature status. Administrators have full control to review candidatures, accept or reject applications with detailed reasoning, and manage the entire doctoral program.

**In simple terms**: It's an application that helps universities manage PhD applications from submission to acceptance/rejection with status tracking and document management.

<img width="1920" height="784" alt="Image" src="https://github.com/user-attachments/assets/a03b1404-6f6c-478f-9871-0742b84f1e57" />


<img width="1920" height="928" alt="Image" src="https://github.com/user-attachments/assets/95eae1e4-e3e3-4c7c-a6ab-15a3589d12f0" />


---



---

## 🎯 What This Project Does

1. **User Authentication & Registration** - Secure sign-up/sign-in with role-based access (admin/doctorant)
2. **Candidature Workflow** - Track applications through multiple states (Draft → Submitted → Accepted/Rejected)
3. **Profile Management** - Doctorants fill in personal info, thesis details, and laboratory information
4. **File Management** - Upload thesis documentation as ZIP files, download submissions
5. **Admin Dashboard** - Comprehensive management of all applications and users
6. **Status Tracking** - Real-time visibility into candidature states with rejection reasoning
7. **Email Integration** - Password reset and notification capabilities

---
## 🎬 Démonstration vidéo

https://github.com/user-attachments/assets/c345abda-7aa5-45bf-94f6-87fda2ebef42

---
## 📁 Project Structure

```
appg/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/DashboardController.php
│   │   ├── User/HomeController.php
│   │   ├── User/profileController.php
│   │   └── User/zipController.php
│   ├── Models/User.php
│   └── Http/Middleware/
│       ├── IsAdmin.php
│       └── soumis.php
├── resources/views/
│   ├── dashfinal/admin/
│   ├── dashfinal/user/
│   └── layouts/homepage/
├── routes/web.php
├── database/migrations/
│   └── 0001_01_01_000000_create_users_table.php
├── public/uploads/doctorants/zipFiles/
├── composer.json
├── package.json
└── README.md
```

---

## 🔧 Tech Stack


| Technology   | Purpose         |
| ------------ | --------------- |
| Laravel 11   | Web framework   |
| PHP 8.2+     | Server language |
| Blade        | Template engine |
| Bootstrap 5  | CSS framework   |
|MySQL         | Database        |
| Vite         | Build tool      |
| Eloquent     | ORM             |
| SweetAlert   | Notifications   |

---

## 🚀 Key Components

### 1. **Authentication System**

- User registration with email verification
- Role-based access (admin/doctorant)
- Password reset via email
- Session management

### 2. **Candidature States**

- `etat=0`: Draft (editable)
- `etat=1`: Submitted (in review)
- `etat=2`: Accepted (final)
- `etat=3`: Rejected (with reason)

### 3. **Admin Dashboard**

- View all doctorants
- Manage candidatures
- Accept/reject applications
- Add rejection reasons
- Download files

### 4. **File Management**

- Upload thesis ZIP files
- Automatic old file cleanup
- Timestamped storage
- Secure downloads

---

## 📊 Database Schema

**users table**: Stores user information including personal data, thesis details, application status, and uploaded files.

Key fields:

- `id`: Primary key
- `is_admin`: Role flag (0=doctorant, 1=admin)
- `etat`: Application state (0-3)
- `email`: Unique email
- `CIN`: National ID
- `zip_file`: Uploaded thesis path
- `motif_de_refus`: Rejection reason

---

## 🔄 Typical User Journey

```
1. Registration → Create account
2. Login → Access dashboard
3. Edit Profile → Fill personal info
4. Edit Thesis → Add thesis details
5. Upload ZIP → Submit thesis documents
6. Submit Application → Change state to submitted
7. Admin Review → Admin evaluates application
8. Decision → Accept or reject with reason
9. View Status → Doctorant sees final decision
```

---

## 🛠️ Installation

```bash
# Clone repository
git clone <repo-url>
cd appg

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start server
php artisan serve
```

---

## 🔐 Security Features

- Hashed passwords (bcrypt)
- CSRF protection
- Role-based authorization
- State-based access control
- File type validation
- Session management

---

## 📚 Learning Outcomes

✅ Laravel MVC architecture
✅ Eloquent ORM & migrations
✅ Blade templating
✅ Middleware & routing
✅ Authentication & authorization
✅ File upload handling
✅ State management patterns
✅ Form validation
