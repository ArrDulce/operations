<?php
namespace App\Http\Controllers;

class PromedioController extends Controller
{
    public function average(
        float $a,
        float $b,
        float $c,
        float $d,
        float $e,
        float $f
    ): float {
        return ($a + $b + $c + $d + $e + $f) / 6;
    }
}