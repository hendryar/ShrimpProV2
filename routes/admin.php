<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');