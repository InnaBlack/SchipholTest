<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public    $fillable
                     = [
            'airlineId',
            'flightNumber',
            'departureAirportId',
            'arrivalAirportId',
        ];

    protected $table = 'flights';
}
