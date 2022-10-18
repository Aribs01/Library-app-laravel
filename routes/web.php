<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\AuthController;

use Illuminate\Http\Request;

// USER ROUTES
Route::get('/', [UserController::class, 'userLogin'])->name('loginpage');
Route::get('/error', [UserController::class, 'errorPage'])->name('errorPage');

Route::get('/register', [UserController::class, 'userRegister']);

Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
Route::get('/my-book-list', [UserController::class, 'userBookList'])->name('myBookList');
Route::get('/all-book-list', [UserController::class, 'allBookList'])->name('allBookList');

// ADMIN ROUTES
Route::get('/admin-dashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/admin-book-list', [AdminController::class, 'adminBookList'])->name('adminBookList');
Route::get('/admin-book-request', [AdminController::class, 'adminBookRequest'])->name('adminBookRequest');

// Route::post('/admin-add-book', [AdminController::class, 'createBook'])->name('createBook');