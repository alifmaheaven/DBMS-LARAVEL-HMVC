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

Route::prefix('partner')->group(function() {
    Route::get('/', 'PartnerController@index');
    Route::get('/update', 'PartnerController@getres_partner');
    Route::post('/update', 'PartnerController@add_res_partner');
});
