<?php

Auth::routes();

Route::get('/', 'PageController@landing')->name('landing');
Route::get('home', 'HomeController@index')->name('home');
Route::get('whatami', 'HomeController@showRoles')->name('show-roles');
Route::get('whatcani', 'HomeController@showPermissions')->name('show-permissions');
Route::get('canigo', 'HomeController@checkRole')->name('check-role');

Route::middleware(['auth', 'backend'])
->namespace('Backend')
->prefix('backend')
->name('backend.')
->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('role', 'RoleController');
    Route::get('role/{role}/permissions', 'RoleController@addPermission')->name('role.add-permission');
    Route::post('role/{role}/permissions', 'RoleController@syncPermission')->name('role.sync-permission');

    Route::resource('user', 'UserController');
    Route::resource('customer', 'CustomerController');
    Route::resource('issue', 'IssueController');
    Route::resource('router', 'RouterController');
});

// Route::middleware(['auth', 'role:sale-marketing'])
// ->namespace('SaleMarketing')
// ->prefix('sale-marketing')
// ->name('sale-marketing.')
// ->group(function () {
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//     Route::resource('issues', 'IssueController');
// });

// Route::middleware(['auth', 'role:customer-service'])
// ->namespace('CustomerService')
// ->prefix('customer-service')
// ->name('customer-service.')
// ->group(function () {
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//     Route::resource('issues', 'IssueController');
// });