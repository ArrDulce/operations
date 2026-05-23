<?php

namespace App\Http\Controllers;

class ExponenteController extends Controller
{
    public function calcularPotencia(float $base, float $exponente): float
    {
        return pow($base, $exponente);
    }
}
