<?php
/**
 * Created by PhpStorm.
 * User: inna
 * Date: 2020-08-13
 * Time: 10:00
 *
 * @param float  $lat1
 * @param float  $lon1
 * @param float  $lat2
 * @param float  $lon2
 * @param \sting $distanceUnit
 *
 * @return float|int
 */
//  Schiphol Amsterdam
// "latitude": 52.30907,
// "longitude": 4.763385,


/**
 * @param float  $lat1
 * @param float  $lon1
 * @param float  $lat2
 * @param float  $lon2
 * @param sting $distanceUnit
 *
 * @return float|int
 */

function distance(float $lat1, float $lon1, $distanceUnit = "", float $lat2 = 52.30907, float $lon2 = 52.30907) {
    if (($lat1 == $lat2) && ($lon1 == $lon2)) {
        return 0;
    }
    else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($distanceUnit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}

function distanceToMiles(float $dist) {
            return ($dist / 1.609344);
}
