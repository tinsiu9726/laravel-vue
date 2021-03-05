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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','App\Http\Controllers\WebController@index');
Route::get('/form','App\Http\Controllers\WebController@index');
Route::get('/address','App\Http\Controllers\WebController@index');

/*
Route::any('{slug}', function(){
    return view('welcome');
});*/

/*Project config 
https://www.youtube.com/watch?v=3sGaiv4KmS4&t=223s&ab_channel=ZarxBiz
https://www.youtube.com/watch?v=VaI9tV8GQFk&t=82s&ab_channel=Scrypster
*/