<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Airport;
use App\Flight;
use Illuminate\Support\Facades\DB;

class AirlineController extends Controller
{

    /**
     * @return \App\Airline[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {

        return  Airline::select(
            'airlines.idf',
            'airlines.name',
            DB::raw('SUM(airports.distance) as distance'))
            ->join('flights', 'airlines.id', '=', 'flights.airlineId')
            ->join('airports', 'flights.arrivalAirportId', '=', 'airports.id')
            ->groupBy(['airlines.id', 'airlines.name'])
            ->orderBy('airports.distance')
            ->get();

    }

}
