<?php

namespace App\Service;

class PriceEstimator
{
    public function getCarEstimation($car_year, $nb_km, $nb_days)
    {
        return $car_year * $nb_days / $nb_km * 55;
    }
}
