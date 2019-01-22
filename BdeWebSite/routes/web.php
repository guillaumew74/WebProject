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


//ROUTE MODIFICATION USER CSSEUD
Route::resource('user', 'UserController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'auth\LoginController@logout');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('/form', 'EventsController@getForm');
Route::post('/post', 'EventsController@postForm');

Route::get('/show', 'EventsController@showPostNoP');
Route::get('/show/{id}', 'EventsController@showPost');

Route::get('/showOne/{id}', 'EventsController@showOne');

Route::get('/like/{id}', 'EventsController@like');
