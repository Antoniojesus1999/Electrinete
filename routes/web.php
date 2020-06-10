<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
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





Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Controller@inicio')->name('inicio');
//Route::get('/', 'Controller@precios')->name('precios');
Route::post('/register','Auth\RegisterController@register')->name('register');
Route::get('/crear','HomeController@crear')->name('crear');
Route::get('/crearTipo','HomeController@crearTipo')->name('crearTipo');
Route::post('/crearVehiculo','HomeController@crearvehiculo')->name('crearVehiculo');
Route::get('/actualizar','HomeController@actualizar')->name('actualizar');
Route::get('/actualizarbd/{id}','HomeController@actualizarbd')->name('actualizarbd');
Route::post('/update','HomeController@update')->name('update');
Route::get('/borrar','HomeController@borrar')->name('borrar');





















/*
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/register','Auth/RegisterController@showRegistrationForm')->name('register');


*/