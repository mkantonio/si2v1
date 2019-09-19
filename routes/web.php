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


Route::get('/', 'PrincipalController@principal')->name('principal');
Route::get('/inicio', 'PrincipalController@inicio')->name('inicio');
Route::get('/registrooption', 'PrincipalController@registrooption')->name('registrooption');
Route::get('/registroemp', 'PrincipalController@registroemp')->name('registroemp');
Route::get('/registrouser', 'PrincipalController@registrouser')->name('registrouser');
Route::get('/iniciosesion', 'PrincipalController@iniciosesion')->name('iniciosesion');

// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Route::middleware(['auth', 'EsAdmin'])->group(function () {
  Route::resource('categoria','CategoriaController');
  Route::resource('tipooferta','TipoOfertaController');
  Route::resource('tipoinmueble','TipoInmuebleController');
  Route::resource('zona','ZonaController');
// });
Route::get('/home', 'HomeController@index')->name('home');
