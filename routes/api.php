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

Route::post('/test',['uses'=>'testController@testPost']);
Route::get('/test',['uses'=>'testController@getPost']);
Route::put('/test{id}',['uses'=>'testController@putPost']);
Route::delete('/test{id}',['uses'=>'testController@deletePost']);

Route::post('/inscription',['uses'=>'InscriptionController@inscriptionPost']);
Route::get('/Utilisateur',['uses'=>'InscriptionController@utilisateurGet']);
Route::put('/Utilisateur',['uses'=>'InscriptionController@utilisateurModifier']);
Route::delete('/Utilisateur',['uses'=>'InscriptionController@utilisateurEffacer']);

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
Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');