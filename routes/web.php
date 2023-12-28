<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::controller(LoginController::class)->group(function (){
    Route::get('/', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/login', 'destroy')->name('login.destroy');
});

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard', 'index')->name('dashboard.index');
});
