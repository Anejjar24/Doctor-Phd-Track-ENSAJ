<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\zipController;
use App\Http\Controllers\User\HomeController;


use App\Http\Controllers\User\profileController;

use App\Http\Controllers\User\editTheseController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('layouts.homepage.main');
});

Route::get('/forget', function () {
    return view('pages.reset');
});



Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
    Route::get('admin/doctorants', [DashboardController::class, 'doctorants'])->name('doctorants')->middleware('is_admin');
    Route::get('admin/details/{id}', [DashboardController::class, 'details'])->name('doctorants.details')->middleware('is_admin');
    Route::get('admin/details/{id}/infopers', [DashboardController::class, 'infopers'])->name('doctorants.infopers')->middleware('is_admin');
    Route::get('admin/details/{id}/infothese', [DashboardController::class, 'infothese'])->name('doctorants.infothese')->middleware('is_admin');

    Route::get('admin/candidature', [DashboardController::class, 'candidature'])->name('candidature')->middleware('is_admin');
    
    Route::get('admin/candidature/{id}/accepter', [DashboardController::class, 'accepter'])->name('accepter')->middleware('is_admin');
    
    Route::get('admin/candidature/{id}/refuser', [DashboardController::class, 'refuser'])->name('refuser')->middleware('is_admin');
    Route::get('admin/candidature/{id}/motif', [DashboardController::class, 'motif'])->name('motif')->middleware('is_admin');
    Route::get('admin/candidature/{id}/choix', [DashboardController::class, 'choix'])->name('choix')->middleware('is_admin');
    Route::put('admin/candidature/{id}/update', [DashboardController::class, 'updateMotif'])->name('updateMotif')->middleware('is_admin');

    Route::get('admin/candidature/acceptee', [DashboardController::class, 'showAcceptee'])->name('candidature.acceptee')->middleware('is_admin');
    
    Route::get('admin/candidature/refusee', [DashboardController::class, 'showRefusee'])->name('candidature.refusee')->middleware('is_admin');
    Route::get('admin/candidature/{id}/showMotif', [DashboardController::class, 'showMotif'])->name('candidature.showMotif')->middleware('is_admin');



    Route::get('admin/candidature/encours', [DashboardController::class, 'showEncours'])->name('candidature.encours')->middleware('is_admin');
    Route::get('admin/candidature/brouillon', [DashboardController::class, 'showBrouillon'])->name('candidature.brouillon')->middleware('is_admin');

    Route::get('/doctorants/{id}/zipDownload', [DashboardController::class,'download'])->name('doctorants.zipdownload')->middleware('is_admin');





    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
});



//modifier
Route::middleware('auth')->group(function(){

Route::get('/home/profile/edit', [profileController::class,'edit'])->name('user.edit')->middleware('soumis');

Route::put('/home/profile/update', [profileController::class,'update'])->name('user.update')->middleware('soumis');

Route::get('/home/these/edit', [editTheseController::class,'edit'])->name('user.these.edit')->middleware('soumis');
Route::put('/home/these/update', [editTheseController::class,'update'])->name('user.these.update')->middleware('soumis');

Route::get('/home/profile', function () {
    return view('dashfinal.user.personnel');
})->name('user.profile');

Route::get('/home/profile/these', function () {
    return view('dashfinal.user.infothese');})->name('user.infothese');

Route::get('/home/uploadpage',[zipController::class,'edit'])->name('user.uploadPage')->middleware('soumis');


Route::put('/home/zipUpload', [zipController::class,'upload'])->name('user.zipUpload')->middleware('soumis');

Route::get('/home/downlaodpage',[zipController::class,'show'])->name('user.downlaodPage')->middleware('soumis');

//ajouter middleware soumettre
Route::get('/home/zipDownload', [zipController::class,'download'])->name('user.zipdownload');


Route::get('/home/telecharger', [zipController::class,'telecharger'])->name('user.telecharger')->middleware('soumis');




Route::get('/home/completer', [profileController::class,'completer'])->name('user.completer')->middleware('soumis');


Route::Post('/home/mettreEtat', [profileController::class,'mettreEtat'])->name('user.mettreEtat');



});
/*Route::middleware('auth')->group(function(){
    Route::get('/home/these/edit', [theseEditController::class,'edit'])->name('user.these.edit');
Route::put('/home/these/update', [theseEditController::class,'updateth'])->name('user.these.update');
});*/



Route::get('/newadmindash', function () {
    return view('admin.newdashboard');
});

/*Route::get('/pagenov', function () {
    return view('layouts.homepage.main');
})->name('pagenov');
Route::get('/pagereg', function () {
    return view('pages.registerback');
});

Route::get('/pagelog', function () {
    return view('pages.loginback');
});
Route::get('/dashmain', function () {
    return view('layouts.dash.main');
});

*/
Route::get('/dashmain', function () {
    return view('dashfinal.main');
});

