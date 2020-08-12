<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    public    $fillable
                     = [
            'id',
            'latitude',
            'longitude',
            'name',
            'city',
            'countryId',
            'countryId'
        ];


    protected $table = 'airports';
}
