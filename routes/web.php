<?php

/* Example of Configuration File*/
Route::get('/', function () {
    return Config::get('dagorret.administrator.name');
});

/* Force to verify email*/
Auth::routes(['verify' => true]);

/* Home */
Route::get('/home', 'HomeController@index')->name('home');

/* Route to Dashboard */
Route::group(['middleware' => ['auth']], function () {
   Route::resource('roles', 'RoleController');
   Route::resource('users', 'UserController');
   Route::resource('products', 'ProductsController');
});


