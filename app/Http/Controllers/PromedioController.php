<?php
namespace App\Http\Controllers;

class OperationsController extends Controller
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