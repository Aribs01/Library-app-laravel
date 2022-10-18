<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
  
Route::group([
  
    'middleware' => 'api',
  
    ], function ($router) {

    Route::post('/login', [AuthController::class, 'login'])->name('loginaction');
    Route::post('/admin-login', [AuthController::class, 'adminLogin']);
    Route::post('/users', [UserController::class, 'store']);
    
    Route::post('/register', [AuthController::class, 'store'])->name('register');
    Route::post('/add-request', [UserController::class, 'createRequest'])->name('createRequest');

    Route::middleware(['auth:sanctum'])->group(function () {

        // User Route APIs
        Route::get('/user', [AuthController::class, 'loginUser']);
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    });

    Route::post('/admin-add-book', [AdminController::class, 'createBook'])->name('createBook');
    Route::get('/admin-remove-book', [AdminController::class, 'destroy'])->name('removeBook');
});