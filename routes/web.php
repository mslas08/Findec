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
    return view('bienvenidos' );
});

Route::get('/dataInput', "FinDec@dataInput",  function () {
    return view::make('menuController.dataInput');
});

Route::any('/', array('as' => 'bienvenidos', 'uses'=>'menuController@index'));
Route::any('/dataInput', array('as' => 'dataInput', 'uses'=>'menuController@dataInput'));