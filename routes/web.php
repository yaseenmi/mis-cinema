<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\ScreenController;

/******************************************/
/************ Public Routes ***************/
/******************************************/
// Home Controller
Route::get('/', [HomeController::class, 'index']);

// Movie Controller
Route::get('/movie', [MovieController::class, 'index']);
Route::get('/movie/{slug}', [MovieController::class, 'show']);

//Seat
Route::get('/seat', [SeatController::class, 'index']);
Route::get('/seat/screen', [SeatController::class, 'showWithScreen']);

//Screen
Route::get('/screen', [ScreenController::class, 'index']);
Route::get('/screen/seat', [ScreenController::class, 'showWithSeats']);
Route::get('/screen/{id}', [ScreenController::class, 'getScreenById']);

/******************************************/
/********** Private User Routes ***********/
/******************************************/
Route::middleware('auth')->group(function () {
    // User Controller
    Route::get('/dashboard', [UserController::class, 'home']);
    Route::get('/dashboard/profile', [UserController::class, 'profile']);
    Route::get('/dashboard/history', [UserController::class, 'history']);
    Route::get('/dashboard/privacy', [UserController::class, 'privacy']);
});

/******************************************/
/********* Private Admin Routes ***********/
/******************************************/
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard/movie', [AdminController::class, 'movie']);
    Route::get('/admin/dashboard/movie/create', [MovieController::class, 'create']);
    Route::get('/admin/dashboard/movie/detail', [MovieController::class, 'detail']);
    Route::post('/admin/dashboard/movie', [MovieController::class, 'store'])->name("createMovie");
    Route::put('/admin/dashboard/movie/{id}', [MovieController::class, 'update']);
    Route::delete('/admin/dashboard/movie/{id}', [MovieController::class, 'destroy']);

    Route::get('/admin/dashboard/seat', [AdminController::class, 'seat']);
    Route::get('/admin/dashboard/seat/create', [AdminController::class, 'create']);
    Route::post('/admin/dashboard/seat', [SeatController::class, 'store']);
    Route::put('/admin/dashboard/seat/{id}', [SeatController::class, 'update']);
    Route::delete('/admin/dashboard/seat/{id}', [SeatController::class, 'destroy']);

    Route::get('/admin/dashboard/screen', [AdminController::class, 'screen']);
    Route::get('/admin/dashboard/screen/create', [ScreenController::class, 'create']);
    Route::post('/admin/dashboard/screen', [ScreenController::class, 'store']);
    Route::put('/admin/dashboard/screen/{id}', [ScreenController::class, 'update']);
    Route::delete('/admin/dashboard/screen/{id}', [ScreenController::class, 'destroy']);

    Route::get('/admin/dashboard/user/', [AdminController::class, 'user']);
    Route::get('/admin/dashboard/', [AdminController::class, 'statistics']);
});



/****************************/
/***** Auth Controllers *****/
/****************************/
require __DIR__ . '/auth.php';
