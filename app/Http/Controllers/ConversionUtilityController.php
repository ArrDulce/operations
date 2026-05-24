<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionUtilityController extends Controller
{
    public function cToF(float $c): float
    {
        return ($c * 9 / 5) + 32;
    }

    public function mostrarVista()
    {
        return view('conversion');
    }

    public function procesarConversion(Request $request)
    {
        $celsius = $request->input('celsius');

        $resultado = $this->cToF((float) $celsius);

        return view('conversion', ['resultado' => $resultado]);
    }
}
