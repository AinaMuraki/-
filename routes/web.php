<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'user'], function() {
    Route::get('contactbook/create', 'User\contactbookController@add');
    Route::get('contactbook/edit', 'User\contactbookController@edit');
    Route::get('contactbook/update', 'User\contactbookController@update');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('Contactbook/create', 'Admin\ContactbookController@add');
    Route::get('Contactbook/edit', 'Admin\ContactbookController@edit');
    Route::get('Contactbook/update', 'Admin\ContactbookController@update');
});

