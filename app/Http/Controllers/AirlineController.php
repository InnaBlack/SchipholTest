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
        return Airline::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id = '')
    {
        if (!empty($id)) {
            return Airline::where('id', $id)->first();
        }
    }
}
