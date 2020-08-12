<?php

namespace App\Http\Controllers;

use App\Airport;

class AirportController extends Controller
{

    /**
     * @return \App\Airport[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Airport::all();
    }
}
