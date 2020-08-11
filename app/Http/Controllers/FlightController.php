<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Requests\SchipholRequest;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       echo('return');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight $flights
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight $flights
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Flight              $flights
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flights
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flights)
    {
        //
    }
}
