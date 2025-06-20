<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index']);

// Auth
// Route::get('/login', [AuthController::class, 'LoginForm']);
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'RegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::middleware(['usersession:ADMIN'])->group(function () {
    // Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['usersession:RECRUITER'])->group(function () {
    Route::get('/recruiter-dashboard', [ApplicantController::class, 'index_recruiter_dashboard'])->name('recruiter.dashboard');
});

// Route::middleware(['usersession:APPLICANT'])->group(function () {
//     Route::get('/applicant-dashboard', [ApplicantController::class, 'index_dashboard'])->name('applicant.dashboard');
// });

// testing
Route::middleware(['usersession:APPLICANT'])->group(function () {
    Route::get('/applicant-dashboard', [ApplicantController::class, 'index_dashboard'])->name('applicant.dashboard');
});

// Route::middleware(['usersession:RECRUITER'])->group(function () {
//     Route::get('/recruiter-dashboard', function () {return 'Welcome to Recruiter Dashboard';
//     })->name('recruiter.dashboard');
// });

