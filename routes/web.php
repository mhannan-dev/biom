<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordRegulator;

Route::group(['as' => 'frontend.'], function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/courses', 'courses')->name('courses');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/registration', 'registration')->name('registration');
    });
});


Auth::routes();

Route::controller(LoginController::class)->prefix('admin')->name('admin.')->middleware('auth_guard', 'guest')->group(function () {
    Route::any('/', 'showLoginForm')->name('login');
    Route::any('/submit', 'login')->name('login.submit');
});
