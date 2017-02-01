<?php
/**
 * Created by PhpStorm.
 * User: alfjuniorbh
 * Date: 16/10/16
 * Time: 19:53
 */
Route::group(['financial'], function () {
    Route::get('/financials', 'FinancialsController@index');
    Route::get('/financial/datatable', 'FinancialsController@datatable');
    Route::get('/financial/create', 'FinancialsController@create');
    Route::post('/financial/store', 'FinancialsController@store');
    Route::get('/financial/edit/{id}', 'FinancialsController@edit');
    Route::put('/financial/update', 'FinancialsController@update');
    Route::post('/financial/destroy', 'FinancialsController@destroy');
    Route::post('/financial/duplicate', 'FinancialsController@duplicate');
    Route::get('/financial/autocomplete', 'FinancialsController@autocomplete');
});