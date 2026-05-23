<?php

namespace App\Http\Controllers;

class McdMcmController extends Controller
{
    /**
     * Calcula el Máximo Común Divisor (MCD) de dos números usando el algoritmo de Euclides.
     *
     * @param  int  $a  Primer número
     * @param  int  $b  Segundo número
     * @return array{mcd: int, input_a: int, input_b: int}|array{error: string}
     */
    public function calcularMCD(int $a, int $b): array
    {
        // Si ambos son cero, el MCD es indefinido
        if ($a === 0 && $b === 0) {
            return ['error' => 'El MCD no está definido cuando ambos números son cero'];
        }

        // Tomar valores absolutos
        $a = abs($a);
        $b = abs($b);

        // Algoritmo de Euclides
        while ($b !== 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return ['mcd' => $a, 'input_a' => $a, 'input_b' => $b];
    }

    /**
     * Calcula el Mínimo Común Múltiplo (MCM) de dos números.
     * Usa la relación: MCM(a, b) = |a * b| / MCD(a, b)
     *
     * @param  int  $a  Primer número
     * @param  int  $b  Segundo número
     * @return array{mcm: int, input_a: int, input_b: int}|array{error: string}
     */
    public function calcularMCM(int $a, int $b): array
    {
        // Si ambos son cero, el MCM es indefinido
        if ($a === 0 && $b === 0) {
            return ['error' => 'El MCM no está definido cuando ambos números son cero'];
        }

        // Si uno es cero, el MCM es cero
        if ($a === 0 || $b === 0) {
            return ['mcm' => 0, 'input_a' => $a, 'input_b' => $b];
        }

        // Obtener MCD
        $mcdResult = $this->calcularMCD($a, $b);

        if (isset($mcdResult['error'])) {
            return $mcdResult;
        }

        // MCM = |a * b| / MCD
        $mcm = abs($a * $b) / $mcdResult['mcd'];

        return ['mcm' => (int) $mcm, 'input_a' => $a, 'input_b' => $b];
    }

    /**
     * Calcula tanto el MCD como el MCM de dos números en una sola operación.
     *
     * @param  int  $a  Primer número
     * @param  int  $b  Segundo número
     * @return array{mcd: int, mcm: int, input_a: int, input_b: int}|array{error: string}
     */
    public function calcularMCDyMCM(int $a, int $b): array
    {
        // Si ambos son cero, es indefinido
        if ($a === 0 && $b === 0) {
            return ['error' => 'MCD y MCM no están definidos cuando ambos números son cero'];
        }

        // Tomar valores absolutos para cálculos
        $absA = abs($a);
        $absB = abs($b);

        // Caso especial: si uno es cero
        if ($absA === 0 || $absB === 0) {
            $mcd = $absA + $absB;

            return ['mcd' => $mcd, 'mcm' => 0, 'input_a' => $a, 'input_b' => $b];
        }

        // Algoritmo de Euclides para MCD
        $x = $absA;
        $y = $absB;
        while ($y !== 0) {
            $temp = $y;
            $y = $x % $y;
            $x = $temp;
        }

        $mcd = $x;
        $mcm = ($absA * $absB) / $mcd;

        return ['mcd' => $mcd, 'mcm' => $mcm, 'input_a' => $a, 'input_b' => $b];
    }
}
