<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Airport
 *
 * @property string $id
 * @property int $latitude
 * @property int $longitude
 * @property string $name
 * @property string $city
 * @property string $countryId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Airport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Airport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        ];


    protected $table = 'airports';

    public $incrementing = false;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
