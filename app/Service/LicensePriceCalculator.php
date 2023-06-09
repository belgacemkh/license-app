<?php

namespace App\Service;

class LicensePriceCalculator
{
    public static function calculatePrice(int $teamSize):float
    {
        return $teamSize <= 5 
            ? $teamSize * 15 
            : 75 + ($teamSize - 5)*10;
    }
}