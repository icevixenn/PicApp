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

// Pages Controller
Route::get('/', 'PagesController@getIndex')->name('index');
Route::get('pages/about', 'PagesController@getAbout')->name('about');
Route::get('pages/contact', 'PagesController@getContact')->name('contact');

// User Controller
Route::get('pages/account', 'UserController@editAccount')->name('account');
Route::patch('pages/account/{user}/update', 'UserController@update')->name('edit-user');

Route::get('pages/account/{id}/edit', 'UserController@editPicture')->name('edit-picture');
Route::put('pages/account/{id}', 'UserController@updatePicture')->name('update-picture');

// Albums Controller
Route::get('albums/', 'AlbumsController@index')->name('index-album');
Route::get('albums/create', 'AlbumsController@create')->name('create-album');
Route::post('albums/store', 'AlbumsController@store')->name('album-store');
Route::get('/albums/{id}', 'AlbumsController@show')->name('album-show');

// Photos Controller
Route::get('/photos/create/{album_id}', 'PhotosController@create')->name('photo-create');
Route::post('/photos/store', 'PhotosController@store')->name('photo-store');
Route::get('/photos/{id}', 'PhotosController@show')->name('photo-show');
Route::delete('/photos/{id}', 'PhotosController@delete')->name('photo-delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

