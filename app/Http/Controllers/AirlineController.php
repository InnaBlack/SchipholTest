<?php

namespace App\Http\Controllers;

use App\Airline;

class AirlineController extends Controller
{

    /**
     * @return \App\Airline[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Airline::all()->sortBy();
    }

}
