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

use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});
//          url         function
route::get('/films','FilmController@index');

route::get('/films/create','FilmController@create');
route::post('/films/store', 'FilmController@store');
route::get('/films/delete/{id}', 'FilmController@destroy');
route::get('/films/edit/{id}', 'FilmController@edit');
route::post('/films/update/{id}', 'FilmController@update');
Route::get('/search', 'FilmController@search');
Route::post('/searchres', 'FilmController@searchres');

route::get('/films/{id}', 'FilmController@show');

