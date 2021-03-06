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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/dataupdate', 'DataBaseUpdateController');

Route::apiResource('/flights', 'FlightController');

Route::apiResource('/airports', 'AirportController');

Route::get('/airports/distanceUnit/{distanceUnit}', 'AirportController@distanceUnit');

Route::apiResource('/airlines', 'AirlineController');

Route::get('/airlines/distanceUnit/{distanceUnit}', 'AirlineController@distanceUnit');
