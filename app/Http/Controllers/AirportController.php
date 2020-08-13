<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Response;

class AirportController extends Controller
{

    /**
     * @return \App\Airport[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Airport::all()->sortBy('distance');
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
            return Airport::where('id', $id)->firstOrFail();
        }
    }


}
