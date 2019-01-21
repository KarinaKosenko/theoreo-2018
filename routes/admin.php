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

Route::prefix('actions')->group(function() {
	Route::get('/', 'Admin\ActionController@index')->name('admin.actions');
	Route::get('/create', 'Admin\ActionController@create')->name('admin.actions.create');
	Route::post('/create', 'Admin\ActionController@store')->name('admin.actions.store');
	Route::get('/edit/{id}', 'Admin\ActionController@edit')->name('admin.actions.edit');
	Route::post('/edit/{id}', 'Admin\ActionController@update')->name('admin.actions.update');
	Route::get('/delete/{id}', 'Admin\ActionController@delete')->name('admin.actions.delete');
	Route::get('/create/image-crop', 'ImageController@imageCrop')->name('image.crop-show');
	Route::post('/create/image-crop', 'ImageController@imageCropPost')->name('image.crop');
});

Route::post('image/upload', 'ImageController@imageDbSave')->name('image.upload');

