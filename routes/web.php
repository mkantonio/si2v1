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
Route::get('/iniciosesion', 'PrincipalController@inicio')->name('iniciosesion');

Route::resource('categoria','CategoriaController');
Route::resource('tipooferta','TipoOfertaController');
Route::resource('tipoinmueble','TipoInmuebleController');
Route::resource('zona','ZonaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
