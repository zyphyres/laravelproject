<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dailyNotifController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'welhome')->name('home')->middleware('auth');
    Route::get('/profile/{id}', 'show')->middleware('auth');
    Route::put('/profile/{id}', 'update')->middleware('auth');
    Route::get('/dailyNotif', [dailyNotifController::class, 'dailyNotif']);
    Route::put('/profile/upload/{id}', 'upload')->middleware('auth');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process')->name('proc');
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/store', 'store')->name('storedata');
    Route::post('/logout', 'logout')->name('logout');
});
