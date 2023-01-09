<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

// Routing View
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [ViewController::class, 'dashboard'])->name('dashboard');
    Route::get('tables', [ViewController::class, 'tables_page'])->name('tables');
    Route::get('profile', [ViewController::class, 'profile'])->name('profile');
});


// Middleware
Route::middleware(['guest'])->group(function () {
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'register_action'])->name('register.action');
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'login_action'])->name('login.action');
});

Route::middleware(['auth'])->group(function () {
    Route::get('password', [UserController::class, 'password'])->name('password');
    Route::post('password', [UserController::class, 'password_action'])->name('password.action');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
