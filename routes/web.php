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

Route::get('/user-dashboard', [ApplicantController::class, 'index_dashboard']);
Route::get('/user-interview', [ApplicantController::class, 'index_interview']);

Route::get('/register', [AuthController::class, 'RegisterForm']);
Route::post('/registerpage', [AuthController::class, 'register'])->name('register');

Route::middleware(['usersession:ADMIN'])->group(function () {
    return 'Ini halaman untuk ADMIN';
});

Route::middleware(['usersession:RECRUITER'])->group(function () {
    return 'Ini halaman untuk ADMIN';
});

Route::middleware(['usersession:APPLICANT'])->group(function () {
    return 'Ini halaman untuk ADMIN';
});
