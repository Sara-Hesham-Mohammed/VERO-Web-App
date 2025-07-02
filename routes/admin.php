<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return "ADMIN DASH";
});

Route::namespace("Admin")->group(function () {  

    Route::get('show', 'AdminController@show');
    Route::get('showable', 'AdminController@showable');
    Route::get('login', 'AdminController@login')->name('login');
});

