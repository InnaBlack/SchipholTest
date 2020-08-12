<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Flight
 *
 * @property string $airlineId
 * @property int $flightNumber
 * @property string $departureAirportId
 * @property string $arrivalAirportId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public $incrementing = false;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
