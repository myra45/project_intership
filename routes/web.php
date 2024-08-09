<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\AdminExtracurricular\AdminExtracurricularHomeController;
use App\Http\Controllers\AdminExtracurricular\AdminExtracurricularProfileController;
use App\Http\Controllers\AdminExtracurricular\PresensiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Admin 
Route::prefix('admin')->group(function() {
  Route::get('/login', [AdminLoginController::class, 'login'])->name('admin_login');
  Route::post('/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
  Route::get('/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
  Route::post('/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
  Route::get('/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
  Route::post('/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
  Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');

  
  Route::middleware(['auth:admin','role:main_admin'])->group(function() 
  {
      Route::get('/home', [AdminHomeController::class, 'index'])->name('admin_home');
      Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin_profile');
      Route::post('/profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
  });
  
  Route::middleware(['auth:admin','role:extracurricular_admin'])->group(function() 
  {
      Route::get('/extracurricular/home', [AdminExtracurricularHomeController::class, 'index'])->name('admin_extracurricular_home');
      // Profile
      Route::get('/extracurricular/profile', [AdminExtracurricularProfileController::class, 'profile'])->name('admin_extracurricular_profile');
      Route::post('/extracurricular/profile-submit', [AdminExtracurricularProfileController::class, 'profile_submit'])->name('admin_extracurricular_profile_submit');
      // Presensi
      Route::get('/extracurricular/presensi', [PresensiController::class, 'index'])->name('admin_extracurricular_presensi');
      Route::get('/extracurricular/form/presensi', [PresensiController::class, 'form'])->name('admin_extracurricular_presensi_form');
  });
});



Route::get('sign-up', [AdminHomeController::class, 'sign_up'])->name('sign_up');
Route::get('admin/form', [AdminHomeController::class, 'form'])->name('admin_form');

Route::get('admin/table', [AdminHomeController::class, 'table'])->name('admin_table');



Route::get('confirmation-password', [AdminLoginController::class, 'confirmation_password'])->name('admin_confirmation_code');
