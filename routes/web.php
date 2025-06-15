<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index']);

// Auth
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

Route::get('/user-dashboard', [ApplicantController::class, 'index_dashboard']);
Route::get('/user-interview', [ApplicantController::class, 'index_interview']);

Route::middleware(['usersession:ADMIN'])->group(function () {
});

Route::middleware(['usersession:RECRUITER'])->group(function () {
});

Route::middleware(['usersession:APPLICANT'])->group(function () {
});