<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'EstructurasDeControl@login');

Route::post('valida','EstructurasDeControl@validarlogin');

Route::get('/nh',[
    'uses'=>'EstructurasDeControl@nh',
    'as'=>'NaotoHattori'
]);
Route::get('/rm',[
    'uses'=>'EstructurasDeControl@rm',
    'as'=>'Magritte'
]);
Route::get('/car',[
    'uses'=>'EstructurasDeControl@car',
    'as'=>'Caravaggio'
]);
Route::get('/v',[
    'uses'=>'EstructurasDeControl@v',
    'as'=>'Vergvoktre'
]);
Route::get('/fk',[
    'uses'=>'EstructurasDeControl@fk',
    'as'=>'FridaKahlo'
]);

