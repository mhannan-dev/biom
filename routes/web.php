<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordRegulator;
use App\Http\Controllers\Backend\DashboardController;

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


Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::any('/', 'redirectAdmin')->name('index');
    Route::any('/home', 'index')->name('home');

});

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'roles' => RolesController::class,
        'users' => UsersController::class,
        'admins' => AdminsController::class,
    ]);
    // Login Routes

    Route::controller(LoginController::class)->prefix('login')->group(function () {
        Route::any('/form', 'showLoginForm')->name('login');
        Route::any('/submit', 'login')->name('login.submit');
        Route::any('/logout', 'logout')->name('logout.submit');
    });
    // Logout Routes
    // Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('logout.submit');
    // Forget Password Routes
    // Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
    // Route::get('/password/reset', [ForgotPasswordRegulator::class, 'showLinkRequestForm'])->name('admin.password.request');

});
