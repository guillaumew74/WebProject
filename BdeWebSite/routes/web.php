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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});


Route::resource('users', 'UsersController');
Route::resource('events', 'EventsController');
Route::resource('photos', 'PhotosController');
Route::resource('comments', 'CommentsController');
Route::resource('articles', 'ArticlesController');
