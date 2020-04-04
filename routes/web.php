<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'Admin\UserController');
Route::resource('customers', 'Admin\CustomerController');