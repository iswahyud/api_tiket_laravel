<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
 
Route::get('/getTicket/{limit}', 'App\Http\Controllers\TiketController@index');
Route::get('/showTicket/{id}', 'App\Http\Controllers\TiketController@show');
Route::post('/addTicket', 'App\Http\Controllers\TiketController@store');
Route::post('/replyTicket', 'App\Http\Controllers\TiketController@reply');
Route::post('/closeTicket', 'App\Http\Controllers\TiketController@close');
Route::post('/delTicket', 'App\Http\Controllers\TiketController@delete');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
