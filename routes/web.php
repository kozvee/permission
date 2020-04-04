<?php

Auth::routes();

Route::get('/', 'PageController@landing')->name('landing');
Route::get('home', 'HomeController@index')->name('home');
Route::get('whatami', 'HomeController@showRoles')->name('show-roles');
Route::get('whatcani', 'HomeController@showPermissions')->name('show-permissions');

Route::middleware(['auth'])
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('issues', 'IssueController');
});

Route::middleware(['auth'])
->namespace('SaleMarketing')
->prefix('sale-marketing')
->name('sale-marketing.')
->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('issues', 'IssueController');
});

Route::middleware(['auth'])
->namespace('CustomerService')
->prefix('customer-service')
->name('customer-service.')
->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('issues', 'IssueController');
});