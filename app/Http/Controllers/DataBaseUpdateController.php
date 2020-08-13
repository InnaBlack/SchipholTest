<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleClient;
use App\Http\Middleware\MapperDBMiddleware;
use App\Enums\ModelType;
use Artisan;


class DataBaseUpdateController extends Controller
{

    public function index()
    {
        /** @var GuzzleClient $client */

        Artisan::call('migrate:reset', ['--force' => true]);
        Artisan::call('migrate');

        $client = new GuzzleClient;
        $result = new MapperDBMiddleware();

        $request =  $client->request('GET','http://flightassets.datasavannah.com/test/airlines.json');
        $result->handle($request,function(){
              echo('airlines.json has been uploaded | ');
        }, ModelType::Airline);

        $request =  $client->request('GET','http://flightassets.datasavannah.com/test/airports.json');
        $result->handle($request,function(){
            echo('airports.json has been uploaded  | ');
        }, ModelType::Airport);

        $request =  $client->request('GET','http://flightassets.datasavannah.com/test/flights.json');
        $result->handle($request,function(){
            echo('flights.json has been uploaded  | ');
        }, ModelType::Flight);

    }

}
