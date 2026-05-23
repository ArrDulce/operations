<?php

namespace App\Http\Controllers;

class ConversionUtilityController extends Controller
{
    public function cToF(float $c): float
    {
        return ($c * 9 / 6) + 32;
    }
}
