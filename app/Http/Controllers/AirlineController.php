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
            'airlines.id',
            'airlines.name',
            DB::raw('SUM(airports.distance) as distance'))
            ->join('flights', 'airlines.id', '=', 'flights.airlineId')
            ->join('airports', 'flights.arrivalAirportId', '=', 'airports.id')
            ->groupBy(['airlines.id', 'airlines.name'])
            ->orderBy('distance')
            ->get();

    }

    /**
     * @param string $distanceUnit
     *
     * @return \App\Airport[]|\Illuminate\Database\Eloquent\Collection
     */
    public function distanceUnit($distanceUnit = '')
    {
        if (!empty($distanceUnit)) {
         return Airline::select(
                'airlines.id',
                'airlines.name',
                DB::raw(strtoupper($distanceUnit) == 'K' ? 'SUM(airports.distance) as distance' : 'SUM(airports.distanceM) as distance'))
                ->join('flights', 'airlines.id', '=', 'flights.airlineId')
                ->join('airports', 'flights.arrivalAirportId', '=', 'airports.id')
                ->groupBy(['airlines.id', 'airlines.name'])
                ->orderBy('distance')
                ->get();
        }
    }



}
