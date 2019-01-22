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
    return view('welcome');
});

//ROUTE MENTIONS LEGALES
Route::get('/mentions-legales', function () {
    return view('mentions-legales');
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

