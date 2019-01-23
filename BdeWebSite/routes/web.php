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

Route::get('/show', 'EventsController@showEventNoP');
Route::get('/show/{id}', 'EventsController@showEvent');
Route::post('/show/{id}', 'EventsController@showSort');

Route::get('/showOne/{id}', 'EventsController@showOne');

Route::post('/postComment/{id}', 'EventsController@showOnePost');

Route::get('/like/{id}', 'EventsController@like');

Route::get('/vote/{id}', 'EventsController@vote');

Route::get('/showIdea', 'EventsController@showIdeaNoP');
Route::get('/showIdea/{id}', 'EventsController@showIdea');


Route::get('/showOneEvent/{id}', 'EventsController@showOneEvent');
Route::get('/showOneIdea/{id}', 'EventsController@showOneIdea');
