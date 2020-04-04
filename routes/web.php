<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/check-role', 'HomeController@checkRole')->name('check-role');

Route::resource('issues', 'Admin\IssueController');