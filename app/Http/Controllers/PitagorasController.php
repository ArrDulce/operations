<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PitagorasController extends Controller
{
    public function calcularHipotenusa(float $a, float $b): float
    {
        return sqrt(($a * $a) + ($b * $b));
    }

    public function mostrarVista()
    {
        return view('pitagoras');
    }

    public function procesarPitagoras(Request $request)
    {
        $a = $request->input('cateto_a');
        $b = $request->input('cateto_b');

        $resultado = $this->calcularHipotenusa((float) $a, (float) $b);

        return view('pitagoras', ['resultado' => $resultado]);
    }
}
