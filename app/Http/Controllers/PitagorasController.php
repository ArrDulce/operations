<?php

namespace App\Http\Controllers;

class PitagorasController extends Controller
{
    public function calcularHipotenusa(float $a, float $b): float
    {
        return sqrt(($a * $a) + ($b * $b));
    }
}
