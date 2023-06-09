<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Auth\BackendLoginController;
use App\Http\Controllers\Admin\Auth\BackendRegisterController;
use App\Http\Controllers\Admin\Auth\BackendForgotPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;

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

Route::group(['prefix'=>'dashboard'], function () {

Route::get('login', [BackendLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [BackendLoginController::class, 'login']);
Route::post('logout', [BackendLoginController::class, 'logout'])->name('logout');

Route::get('register', [BackendRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [BackendRegisterController::class, 'register']);

Route::get('password/reset', [BackendForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [BackendForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [BackendForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [BackendForgotPasswordController::class, 'reset'])->name('password.update');

});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/registration', function () {
    return view('auth/registration');
});

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('contact-us', function () {
    return view('contact-us');
});