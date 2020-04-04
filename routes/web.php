<?php

Auth::routes();

Route::get('/', 'PageController@landing')->name('landing');
Route::get('home', 'HomeController@index')->name('home');

Route::middleware(['auth'])
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('issues', 'IssueController');
});