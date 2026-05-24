<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }

    public function mostrarVista()
    {
        return view('suma');
    }

    public function procesarSuma(Request $request)
    {

        $numA = $request->input('numero_a');
        $numB = $request->input('numero_b');

        $total = $this->addition((int) $numA, (int) $numB);

        return view('suma', ['resultado' => $total]);
    }
}
