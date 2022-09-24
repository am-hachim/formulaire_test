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


use App\Http\Controllers\PostController;


 //Route pour le formulaire
Route::get('/',[
    'as'=>'PostController.index',
    'uses'=>'PostController@index'
]);


//Route pour l'envoi du formulaire qui applique les fonctions demander 
Route::post('/formulaire',[
    'as'=>'PostController.creat',
    'uses'=>'PostController@creat'
]);


