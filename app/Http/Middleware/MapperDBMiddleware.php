<?php

namespace App\Http\Middleware;

use Closure;
use App\Airline;
use App\Flight;
use App\Airport;
use App\Enums\ModelType;

class MapperDBMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  \App\Enums\ModelType     $modelType
     *
     * @return mixed
     */

    public function handle($request, Closure $next, int $modelType)
    {

        $response_array = json_decode($request->getBody(), true);

        /** @var Airline $airline */
        /** @var Flight $flight */
        /** @var Airline $airport */

        foreach ($response_array as $response) {

                switch($modelType) {
                case ModelType::Airline :
                    $model =  new Airline();
                    $model->id = $response['id'];
                    $model->name = $response['name'];
                    $model->save();
                    break;
                case ModelType::Flight :
                    $model =  new Flight();
                    $model->airlineId = $response['airlineId'];
                    $model->flightNumber = $response['flightNumber'];
                    $model->departureAirportId = $response['departureAirportId'];
                    $model->arrivalAirportId = $response['arrivalAirportId'];
                    $model->save();
                    break;
                case ModelType::Airport :
                    $model =  new Airport();
                    $model->id = $response['id'];
                    $model->latitude = $response['latitude'];
                    $model->longitude = $response['longitude'];
                    $model->distance = distance(
                        $response['latitude'],
                        $response['longitude']);
                    $model->name = $response['name'];
                    $model->city = $response['city'];
                    $model->countryId = $response['countryId'];
                    $model->save();
                    break;
                };

                }

        return $next($request);
    }


}
