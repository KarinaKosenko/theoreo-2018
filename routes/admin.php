<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/


Route::get('/', 'HomeController@index')->name('admin.home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('actions', 'Admin\ActionController@index')->name('admin.actions');
Route::get('actions/create', 'Admin\ActionController@create')->name('admin.actions.create');
Route::post('actions/create', 'Admin\ActionController@store');
Route::get('actions/edit/{id}', 'Admin\ActionController@edit');
Route::post('actions/edit/{id}', 'Admin\ActionController@update');
Route::get('actions/delete/{id}', 'Admin\ActionController@delete');

//Route::post('image/upload', 'ImageController@upload')->name('image.upload');
//Route::get('actions/create/image-crop', 'ImageController@imageCrop');

Route::post('actions/create/image-crop', 'ImageController@imageCropPost')->name('image.crop');