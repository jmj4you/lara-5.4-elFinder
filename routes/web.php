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

Route::get('/', '\Barryvdh\Elfinder\ElfinderController@showIndex');
Route::get('/elfinder/connector', '\Barryvdh\Elfinder\ElfinderController@showConnector');
