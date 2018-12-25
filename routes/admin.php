<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/


Route::get('/', 'HomeController@index')->name('admin.home');
Route::get('/brands','HomeController@brands')->name('brands.home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');