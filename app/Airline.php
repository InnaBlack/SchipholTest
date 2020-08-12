<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Airline
 *
 * @property string $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Airline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Airline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Airline query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Airline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Airline whereName($value)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Airline whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Airline extends Model
{

    public    $fillable
                     = [
            'id',
            'name',
        ];

    protected $table = 'airlines';

    public $incrementing = false;

}
