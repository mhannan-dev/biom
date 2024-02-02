<?php

use Modules\Product\Http\Controllers\CategoryController;

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

Route::group(['prefix' => 'catalogue', 'as' => 'catalogue.'], function () {
    Route::resources([
        'category' => CategoryController::class,
    ]);
});