<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Auth\LoginController as BackendLoginController;
use App\Http\Controllers\Admin\Auth\RegisterController as BackendRegisterController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController as BackendForgotPasswordController;
use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Auth\LoginController as FrontendLoginController;
use App\Http\Controllers\Auth\RegisterController as FrontendRegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController as FrontendForgotPasswordController;

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

Route::group(['prefix'=>'dashboard', 'namespace'=>''], function () {

// Authentication Routes
Route::get('login', [BackendLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [BackendLoginController::class, 'login']);
Route::post('logout', [BackendLoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [BackendRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [BackendRegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [BackendForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [BackendForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [BackendForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [BackendForgotPasswordController::class, 'reset'])->name('password.update');

});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('login', [FrontendLoginController::class, 'showLoginForm'])->name('login');

Route::get('/registration', function () {
    return view('auth/registration');
});

Route::get('/', function () {
    return view('index');
});

Route::get('contact-us', function () {
    return view('contact-us');
});