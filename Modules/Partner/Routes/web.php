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
    Route::post('/update', 'PartnerController@getres_partner');
});
