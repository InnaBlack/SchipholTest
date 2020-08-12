<?php

namespace App\Http\Controllers;

use App\Flight;

class FlightController extends Controller
{

    /**
     * @return \App\Flight[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
       return Flight::all();
    }
}
