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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/api/v1'], function(){
    Route::post('persons', 'PersonController@create');
    Route::get('persons', 'PersonController@listAll');
    Route::get('persons/{document}', 'PersonController@listOne');
    Route::delete('persons/{document}', 'PersonController@delete');
    Route::put('persons/{document}', 'PersonController@update');

    Route::post('movies', 'MovieController@create');
    Route::get('movies', 'MovieController@listAll');
    Route::get('movies/{title}', 'MovieController@listOne');
    Route::delete('movies/{title}', 'MovieController@delete');
    Route::put('movies/{title}', 'MovieController@update');
});
