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

//ROUTE LOGIN/LOGOUT
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'auth\LoginController@logout');

//ROUTE PRISE DE CONTACT
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('/form', 'EventsController@getForm');
Route::post('/post', 'EventsController@postForm');

Route::get('/show', 'EventsController@showEventNoP'); //Affiche la première page des Events
Route::get('/show/{id}', 'EventsController@showEvent'); //Affiche la suite des page par ancienneté
Route::post('/show/{id}', 'EventsController@showSort'); //Affiche la suite des page retrié par popularité

Route::get('/showOne/{id}', 'EventsController@showOne'); //Affiche un Event ou Idea

Route::post('/postComment/{id}', 'EventsController@showOneEventPost'); //Après avoir posté un comment

Route::get('/like/{id}', 'EventsController@like'); //fonction Like

Route::get('/vote/{id}', 'EventsController@vote'); //fonction vote

Route::get('/showIdea', 'EventsController@showIdeaNoP'); //affiche la première pas des Idea
Route::get('/showIdea/{id}', 'EventsController@showIdea'); //affiche la suite des Idea

Route::post('/showIdeaPost', 'EventsController@postSort');//permet de gere le choix du tri du user
Route::get('/showIdeaSort/{id}', 'EventsController@showIdeaSort');//affiche la suite des idea retrié par popularité

Route::get('/suscribe/{id}', 'EventsController@suscribe');//fonction suscribe
Route::get('/getSuscribers/{id}', 'EventsController@getSuscribers');//permet de télécharger la liste des participant en csv

Route::get('/showOneEvent/{id}', 'EventsController@showOneEvent');//affiche un event
Route::get('/showOneIdea/{id}', 'EventsController@showOneIdea');//affiche une Idea



Route::get('/administration', function () {
    return view('vue.admin');
})->middleware('admin');
Route::resource('user', 'UserController')->middleware('admin');


Route::get('/error', function () {
    return view('errors.erroradmin');
});

Route::get('/condition', function () {
    return view('vue.condition');
});


