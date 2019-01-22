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

//ROUTE HOME
Route::get('/', function () {
    return view('vue.welcome');
});

//ROUTE MENTIONS LEGALES
Route::get('/mentions-legales', function () {
    return view('vue.mentions-legales');
});

//ROUTE MODIFICATION USER CSSEUD
Route::resource('user', 'UserController');

//ROUTE LOGIN/LOGOUT
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'auth\LoginController@logout');

//ROUTE PRISE DE CONTACT
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('/form', 'EventsController@getForm');
Route::post('/post', 'EventsController@postForm');

Route::get('/show', 'EventsController@showPostNoP');
Route::get('/show/{id}', 'EventsController@showPost');

Route::get('/showOne/{id}', 'EventsController@showOne');
Route::post('/postComment/{id}', 'EventsController@showOnePost');

Route::get('/like/{id}', 'EventsController@like');

Route::get('/showIdee', 'EventsController@showIdeeNoP');
