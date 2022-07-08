<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Page\JobController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
//     return view("welcome");
// });

Route::resource('/jobs', JobController::class);
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('register', [RegisterController::class, 'actionregister'])->name('actionregist');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionregister', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/search', [JobController::class, 'search'])->name('searchJob')->middleware('auth');
