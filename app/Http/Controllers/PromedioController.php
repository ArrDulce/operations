<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function mostrarVista()
    {
        return view('promedio');
    }

    public function procesarPromedio(Request $request)
    {
        $n1 = $request->input('n1');
        $n2 = $request->input('n2');
        $n3 = $request->input('n3');
        $n4 = $request->input('n4');
        $n5 = $request->input('n5');
        $n6 = $request->input('n6');

        $resultado = $this->average((float) $n1, (float) $n2, (float) $n3, (float) $n4, (float) $n5, (float) $n6);

        return view('promedio', ['resultado' => $resultado]);
    }
}
