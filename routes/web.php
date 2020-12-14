<?php

use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Controller@inicio')->name('inicio');
Route::get('/precios', 'Controller@precios')->name('precios');
Route::post('/register','Auth\RegisterController@register')->name('register');
Route::get('/crear','HomeController@crear')->name('crear');
Route::get('/crearTipo','HomeController@crearTipo')->name('crearTipo');
Route::post('/crearVehiculo','HomeController@crearvehiculo')->name('crearVehiculo');
Route::get('/actualizar','HomeController@actualizar')->name('actualizar');
Route::get('/actualizarbd/{id}','HomeController@actualizarbd')->name('actualizarbd');
Route::post('/update','HomeController@update')->name('update');
Route::get('/borrar','HomeController@borrar')->name('borrar');
Route::get('/borrarbd','HomeController@borrarbd')->name('borrarbd');
Route::get('/borrarusuario/{id}','HomeController@borrarusuario')->name('borrarusuario');
Route::get('/borrarvehiculo/{id}','HomeController@borrarvehiculo')->name('borrarvehiculo');
Route::get('/alquilar/{id}','HomeController@alquilar')->name('alquilar');
Route::get('/confirmarvehiculo/{id}','HomeController@confirmarvehiculo')->name('confirmarvehiculo');
Route::get('/confirmarusuario/{id}','HomeController@confirmarusuario')->name('confirmarusuario');
Route::get('/alquilado/{id}','HomeController@alquilado')->name('alquilado');
Route::get('/devolver/{id}','HomeController@devolver')->name('devolver');
Route::get('/crearAdmin','HomeController@crearAdmin')->name('crearAdmin');
Route::get('/nuevoAdmin/{id}','HomeController@nuevoAdmin')->name('nuevoAdmin');
Route::get('/quitarAdmin/{id}','HomeController@quitarAdmin')->name('quitarAdmin');
Route::get('/notaLegal','Controller@notaLegal')->name('notaLegal');
Route::get('/politica','Controller@politica')->name('politica');
Route::get('/manual','Controller@manual')->name('manual');
Route::get('/bici','Controller@bici')->name('bici');
Route::get('/bicielectrica','Controller@bicielectrica')->name('bicielectrica');
Route::get('/patinete','Controller@patinete')->name('patinete');




























/*
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/register','Auth/RegisterController@showRegistrationForm')->name('register');


*/