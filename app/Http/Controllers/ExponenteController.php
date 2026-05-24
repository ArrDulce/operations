<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExponenteController extends Controller
{
    public function calcularPotencia(float $base, float $exponente): float
    {
        return pow($base, $exponente);
    }

    public function mostrarVista()
    {
        return view('exponente');
    }

    public function procesarExponente(Request $request)
    {

        $base = $request->input('base');
        $exponente = $request->input('exponente');

        $resultado = $this->calcularPotencia((float) $base, (float) $exponente);

        return view('exponente', [
            'resultado' => $resultado,
            'base' => $base,
            'exponente' => $exponente,
        ]);
    }
}
