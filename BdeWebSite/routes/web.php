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

<<<<<<< HEAD

Route::resource('users', 'UsersController');
Route::resource('events', 'EventsController');
Route::resource('photos', 'PhotosController');
Route::resource('comments', 'CommentsController');
Route::resource('articles', 'ArticlesController');

=======
Route::get('/template', function () {
    return view('template');
});
>>>>>>> parent of 44aeb1b... Ajout de la migration
