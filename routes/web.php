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

Route::get('/', 'IndexController@index');

Route::get('/cat/{id}', 'CategoryController@show_actions_by_category');

Route::get('/tag/{tag_name}', 'TagController@show_actions_by_tag');

Route::get('/brand/{brand_name}', 'BrandController@show_actions_by_brand');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show', function () {
    return view('pages.actions.show');
});
