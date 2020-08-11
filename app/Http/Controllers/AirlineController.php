<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Http\Requests\SchipholRequest;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'result';
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
     * @param  \App\Airline $airlines
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airlines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airline $airlines
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airlines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Airline             $airlines
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airlines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airline  $airlines
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airlines)
    {
        //
    }
}
