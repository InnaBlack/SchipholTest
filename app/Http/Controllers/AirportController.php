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

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id = '')
    {
        if (!empty($id)) {
            return Airport::where('id', $id)->first();
        }
    }
}
