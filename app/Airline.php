<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{

    public    $fillable
                     = [
            'id',
            'name',
        ];

    protected $table = 'airlines';
}
