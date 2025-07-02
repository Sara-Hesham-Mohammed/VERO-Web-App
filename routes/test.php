<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tester\TestController;


Route::resource("test",TestController::class);;

