<?php

namespace App\Http\Controllers;

use App\Airport;
use Response;

class AirportController extends Controller
{

    /**
     * @return \App\Airport[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Airport::all('id', 'name', 'distance')->sortBy('distance');
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function show(string $id = '')
    {
        if (!empty($id)) {
            return Airport::select('id', 'name', 'city', 'countryId', 'latitude', 'longitude')->where('id', $id)->firstOrFail();
        }
    }

    /**
     * @param string $distanceUnit
     *
     * @return \App\Airport[]|\Illuminate\Database\Eloquent\Collection
     */
    public function distanceUnit($distanceUnit = '')
    {
        if (!empty($distanceUnit)) {
            return Airport::all('id', 'name', 'distance')->sortBy('distance');
        }
    }




}
