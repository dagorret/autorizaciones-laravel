<?php


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
   Route::resource('roles', 'RoleController');
   Route::resource('users', 'UserController');
   Route::resource('products', 'ProductsController');
});


