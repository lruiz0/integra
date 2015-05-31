<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as'=> '/', 'uses' => 'HomeController@index'
]);

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('menu-social', [
    'as' => 'menuSocial', 'uses' => 'JuegosController@menuSocial'
]);

Route::get('menu-lenguaje', [
    'as' => 'menuLenguaje', 'uses' => 'JuegosController@menuLenguaje'
]);

Route::get('menu-memoria', [
    'as' => 'menuMemoria', 'uses' => 'JuegosController@menuMemoria'
]);

Route::get('menu-autogestion', [
    'as' => 'menuAutogestion', 'uses' => 'JuegosController@menuAutogestion'
]);

Route::get('preguntas-social', [
    'as' => 'jSocial', 'uses' => 'JuegosController@preguntasSocial'
]);

Route::get('preguntas-lenguaje', [
    'as' => 'jLenguaje', 'uses' => 'JuegosController@preguntasLenguaje'
]);

Route::get('candy-crack', [
    'as' => 'jMemoriaCandyCrack', 'uses' => 'JuegosController@candyCrack'
]);

Route::get('memory', [
    'as' => 'jMemoriaMemory', 'uses' => 'JuegosController@memory'
]);

Route::get('autogestion', [
    'as' => 'jAutogestion', 'uses' => 'JuegosController@autogestion'
]);

Route::get('tu-zona', [
    'as' => 'zonaPrivada', 'uses' => 'JuegosController@zonaPrivada'
]);