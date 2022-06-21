<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/equipos/{id}', 'App\Http\Controllers\EquipoController@show');
Route::get('/equipos', 'App\Http\Controllers\EquipoController@index');
Route::post('/equipos', 'App\Http\Controllers\EquipoController@store');
Route::put('/equipos/{id}', 'App\Http\Controllers\EquipoController@update');
Route::delete('/equipos/{id}', 'App\Http\Controllers\EquipoController@destroy');


Route::get('/inventario', 'App\Http\Controllers\InventarioController@index');
Route::get('/inventario/{id}', 'App\Http\Controllers\InventarioController@show');
Route::post('/inventario', 'App\Http\Controllers\InventarioController@store');
Route::put('/inventario/{id}', 'App\Http\Controllers\InventarioController@update');
Route::delete('/inventario/{id}', 'App\Http\Controllers\InventarioController@destroy');

Route::get('/laboratorio', 'App\Http\Controllers\LaboratorioController@index');
Route::get('/laboratorio/{id}', 'App\Http\Controllers\LaboratorioController@show');
Route::post('/laboratorio', 'App\Http\Controllers\LaboratorioController@store');
Route::put('/laboratorio/{id}', 'App\Http\Controllers\LaboratorioController@update');
Route::delete('/laboratorio/{id}', 'App\Http\Controllers\LaboratorioController@destroy');

Route::get('/filtro/equipo', 'App\Http\Controllers\EquipoController@filter');
Route::get('/filtro/inventario', 'App\Http\Controllers\InventarioController@filter');
Route::get('/filtro/laboratorio', 'App\Http\Controllers\LaboratorioController@filter');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

    Route::get('/users', 'App\Http\Controllers\AuthController@index');
    Route::put('/user', 'App\Http\Controllers\AuthController@update');
    Route::delete('/user', 'App\Http\Controllers\AuthController@destroy');
    Route::get('/filtro/user', 'App\Http\Controllers\AuthController@filter');


});