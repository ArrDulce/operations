<?php

namespace App\Http\Controllers;

class ExponenteController extends Controller
{
    public function calcularPotencia(float $base, float $exponent): float
    {
        return pow($base, $exponent);
    }
}
