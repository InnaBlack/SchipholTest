<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBaseUpdateController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirlineController;


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

Route::apiResource('/data_update', 'DataBaseUpdateController');

Route::apiResource('/flights', 'FlightController');
Route::apiResource('/airports', 'AirportController');
//Route::apiResource('/airports/={id}', 'AirportController', ['airports' => 'id']);
Route::apiResource('/airlines', 'AirlineController');


Route::resource('/flights', 'FlightController')->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::resource('/airports', 'AirportController')->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::resource('/airlines', 'AirlineController')->only([
    'index', 'show', 'store', 'update', 'destroy'
]);
