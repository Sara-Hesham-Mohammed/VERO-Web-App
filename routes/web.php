<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Auth::routes(["verify"=> true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('verified');

//login with any service facebook, github, whatever
Route::get('/{service}/login', [SocialController::class, 'redirect']);
Route::get('/callback/{service}', [SocialController::class, 'callback']);