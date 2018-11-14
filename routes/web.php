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



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
        
        //        // Uses Auth Middleware
//    });
Route::group(['prefix'=>'habitos', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',              ['as'=>'habitos',           'uses'=>'HabitosController@index']);
    Route::get('create',        ['as'=>'habitos.create',    'uses'=>'HabitosController@create']);
    Route::get('{id}/destroy',  ['as'=>'habitos.destroy',   'uses'=>'HabitosController@destroy']);
    Route::get('{id}/edit',    ['as'=>'habitos.edit',      'uses'=>'HabitosController@edit']);
    Route::put('{id}/update',   ['as'=>'habitos.update',    'uses'=>'HabitosController@update']);
    Route::post('store',         ['as'=>'habitos.store',     'uses'=>'HabitosController@store']);
});

Route::group(['prefix'=>'historicos', 'where'=>['id'=>'[0-9]+']], function(){
    Route::get('',              ['as'=>'historicos',           'uses'=>'HistoricosController@index']);
    Route::get('create',        ['as'=>'historicos.create',    'uses'=>'HistoricosController@create']);
    Route::get('{id}/destroy',  ['as'=>'historicos.destroy',   'uses'=>'HistoricosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'historicos.edit',      'uses'=>'HistoricosController@edit']);
    Route::put('{id}/update',   ['as'=>'historicos.update',    'uses'=>'HistoricosController@update']);
    Route::post('store',        ['as'=>'historicos.store',     'uses'=>'HistoricosController@store']);

    Route::get('createmaster', ['as'=>'historicos.createmaster', 'uses'=>'HistoricosController@createmaster']);
    Route::post('masterdetail', ['as'=>'historicos.masterdetail', 'uses'=>'HistoricosController@masterdetail']);
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
