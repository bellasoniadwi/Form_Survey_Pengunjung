<?php

use App\Http\Controllers\SinarmedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/survey', [SinarmedController::class, 'survey']);
=======
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 2261ac8e339f6f3e7686318bc6376bd224deafe3
