<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateHashController extends Controller
{
    public function generateHash(string $text): string
    {
        return hash('sha256', $text);
    }

    public function mostrarVista()
    {
        return view('hash');
    }

    public function procesarHash(Request $request)
    {
        $texto = $request->input('texto');

        $resultado = $this->generateHash($texto);

        return view('hash', ['resultado' => $resultado]);
    }
}
