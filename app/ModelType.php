<?php
/**
 * Created by PhpStorm.
 * User: inna
 * Date: 2020-08-12
 * Time: 18:32
 */
namespace App\Enums;

use BenSampo\Enum\Enum;

final class ModelType extends Enum
{
    const Airline = 1;
    const Flight = 2;
    const Airport = 3;

}
