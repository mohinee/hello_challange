<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'Auth\LoginController@login');

Route::get('/currencyConvertor/{a}/{to}/{from}','currencyConvertor@convert');

Route::get('/manage','currencyConvertor@manage');

Route::post('/addCurrency','currencyConvertor@addCurrency');

Route::get('/reset','currencyConvertor@resetList');