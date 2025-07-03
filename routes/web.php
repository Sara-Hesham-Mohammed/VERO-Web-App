<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/withID/{id}', function ($id) {
    return "welc $id";
});


Route::get('/doubleParam/{fname}/{lname}', function ($fname, $lname) {
    return "welc $fname $lname";
});

Route::get('/profile/{id?}', function () {
    return "welc, if no id passed it should work bardo 3ady";
})->name('profile');


// say ihave a bunch of routes related to user or a specific thing with subroutes

Route::prefix("prof")->group(
    function (){
        
        Route::get('/{id}', fn($id)=> "welcomeady")->where('id', '[0-9]+');

        Route::get('/smth', function () {
            return "welc this'll show the prof/smth endpoint";
        });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

