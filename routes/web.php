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
Route::get('/inicio/{request?}', 'PrincipalController@inicio')->name('inicio');
// Route::get('/registrooption', 'PrincipalController@registrooption')->name('registrooption');
// Route::get('/registroemp', 'PrincipalController@registroemp')->name('registroemp');
// Route::get('/registrouser', 'PrincipalController@registrouser')->name('registrouser');
// Route::get('/iniciosesion', 'PrincipalController@iniciosesion')->name('iniciosesion');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/peticiones','PeticionesController@peticiones')->name('peticiones');
Route::get('publicacion/mostrar/{publicacion}','PublicacionController@mostrar')->name('publicacion.mostrar');
// Route::get('publicacion/crear','PublicacionController@crear')->name('publicacion.crear');
Route::get('agendarcita/mostrar/{agendarcita}','AgendarCitaController@mostrar')->name('agendarcita.mostrar');
Route::get('agendarcita/mostrartodos/{agendarcita}','AgendarCitaController@mostrartodos')->name('agendarcita.mostrartodos');
Route::resource('destacados','DestacadosController');
Auth::routes();


Route::middleware(['auth', 'EsAdmin'])->group(function () {
  Route::get('/dashboard', 'PrincipalController@dashboard')->name('dashboard');
  Route::get('administrador','AdministradorController@index');
  Route::resource('categoria','CategoriaController');
  Route::resource('tipooferta','TipoOfertaController');
  Route::resource('tipoinmueble','TipoInmuebleController');
  Route::resource('zona','ZonaController');
  Route::resource('metodopago','MetodoPagoController');
  Route::get('reporte/categoria','ReporteController@categoria')->name('reporte.categoria');
  Route::get('reporte/categoria/pdf','ReporteController@categoriapdf')->name('reporte.categoria.pdf');
  Route::get('reporte/tipooferta','ReporteController@tipooferta')->name('reporte.tipooferta');
  Route::get('reporte/tipooferta/pdf','ReporteController@tipoofertapdf')->name('reporte.tipooferta.pdf');
  // Route::get('reporte/tipoinmueble','ReporteController@tipoinmueble')->name('reporte.tipoinmueble');
  Route::get('reporte/zona','ReporteController@zona')->name('reporte.zona');
  Route::get('reporte/zona/pdf','ReporteController@zonapdf')->name('reporte.zona.pdf');
  Route::resource('reporte','ReporteController');
  Route::resource('gestionusuario','GestionUsuarioController');

  // Route::resource('reporte','ReporteController');



});

Route::middleware('auth')->group(function () {
  // Route::resource('inmueble','InmuebleController')->only(['index','store']);
  // Route::resource('ambiente','AmbienteController')->only(['show','store']);
  // Route::resource('ubicacion','UbicacionController')->only(['index','store']);
  // Route::get('publicacion/{id?}','PublicacionController@index')->name('publicacion.index');
  // Route::resource('publicacion','PublicacionController')->only(['show','store','created']);
  // Route::resource('publicacion','PublicacionController')->only(['index','store','create','update','destroy','edit']);
  Route::resource('destacadopublicacion','DestacadoPublicacionController');
  Route::resource('publicacion','PublicacionController');
  Route::resource('agendarcita','AgendarCitaController');
});


