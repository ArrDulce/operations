<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\ConversionUtilityController;
use App\Http\Controllers\ExponenteController;
use App\Http\Controllers\GenerateHashController;
use App\Http\Controllers\McdMcmController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\PitagorasController;
use App\Http\Controllers\PromedioController;

class MenuOperaciones extends Command
{
    protected $signature = 'app:menu-operaciones';
    protected $description = 'Menú interactivo para ejecutar las operaciones del sistema';

    public function handle()
    {
        $continuar = true;

        $this->info('======================================');
        $this->info('   MENÚ DE OPERACIONES EN TERMINAL    ');
        $this->info('======================================');

        while ($continuar) {
            $this->newLine();
            $opcion = $this->choice(
                'Selecciona la operación que deseas realizar',
                [
                    '1' => 'Suma Básica',
                    '2' => 'Teorema de Pitágoras',
                    '3' => 'Cálculo de Exponente',
                    '4' => 'Conversión °C a °F',
                    '5' => 'Generar Hash SHA256',
                    '6' => 'Calcular MCD y MCM',
                    '7' => 'Promedio de 6 números',
                    '8' => 'Salir'
                ],
                '8'
            );

            switch ($opcion) {
                case 'Suma Básica':
                    $this->ejecutarSuma();
                    break;
                case 'Teorema de Pitágoras':
                    $this->ejecutarPitagoras();
                    break;
                case 'Cálculo de Exponente':
                    $this->ejecutarExponente();
                    break;
                case 'Conversión °C a °F':
                    $this->ejecutarConversion();
                    break;
                case 'Generar Hash SHA256':
                    $this->ejecutarHash();
                    break;
                case 'Calcular MCD y MCM':
                    $this->ejecutarMcdMcm();
                    break;
                case 'Promedio de 6 números':
                    $this->ejecutarPromedio();
                    break;
                case 'Salir':
                    $this->info('Saliendo del menú... ¡Hasta luego!');
                    $continuar = false;
                    break;
            }
        }
    }

    // --- MÉTODOS DE CADA OPERACIÓN ---

    private function ejecutarSuma()
    {
        $this->line('-- Suma Básica --');
        $a = $this->ask('Ingresa el primer número entero');
        $b = $this->ask('Ingresa el segundo número entero');

        $controller = app(OperationsController::class);
        $resultado = $controller->addition((int)$a, (int)$b);

        $this->info("Resultado: La suma es {$resultado}");
    }

    private function ejecutarPitagoras()
    {
        $this->line('-- Teorema de Pitágoras --');
        $catetoA = $this->ask('Ingresa el valor del cateto A');
        $catetoB = $this->ask('Ingresa el valor del cateto B');

        $controller = app(PitagorasController::class);
        $hipotenusa = $controller->calcularHipotenusa((float)$catetoA, (float)$catetoB);

        $this->info("Resultado: La hipotenusa es {$hipotenusa}");
    }

    private function ejecutarExponente()
    {
        $this->line('-- Cálculo de Exponente --');
        $base = $this->ask('Ingresa la base');
        $exponente = $this->ask('Ingresa el exponente');

        $controller = app(ExponenteController::class);
        $resultado = $controller->calcularPotencia((float)$base, (float)$exponente);

        $this->info("Resultado: {$base} elevado a la {$exponente} es {$resultado}");
    }

    private function ejecutarConversion()
    {
        $this->line('-- Conversión Celsius a Fahrenheit --');
        $celsius = $this->ask('Ingresa los grados Celsius');

        $controller = app(ConversionUtilityController::class);
        $fahrenheit = $controller->cToF((float)$celsius);

        $this->info("Resultado: {$celsius}°C equivalen a {$fahrenheit}°F");
    }

    private function ejecutarHash()
    {
        $this->line('-- Generador de Hash SHA256 --');
        $texto = $this->ask('Ingresa el texto a encriptar');

        $controller = app(GenerateHashController::class);
        $hash = $controller->generateHash((string)$texto);

        $this->info("Hash generado:");
        $this->line($hash);
    }

    private function ejecutarMcdMcm()
    {
        $this->line('-- Cálculo de MCD y MCM --');
        $a = $this->ask('Ingresa el primer número entero');
        $b = $this->ask('Ingresa el segundo número entero');

        $controller = app(McdMcmController::class);
        $resultado = $controller->calcularMCDyMCM((int)$a, (int)$b);

        if (isset($resultado['error'])) {
            $this->error($resultado['error']);
        } else {
            $this->info("MCD: {$resultado['mcd']} | MCM: {$resultado['mcm']}");
        }
    }

    private function ejecutarPromedio()
    {
        $this->line('-- Promedio de 6 números --');
        $a = $this->ask('Número 1');
        $b = $this->ask('Número 2');
        $c = $this->ask('Número 3');
        $d = $this->ask('Número 4');
        $e = $this->ask('Número 5');
        $f = $this->ask('Número 6');

        $controller = app(PromedioController::class);
        $promedio = $controller->average((float)$a, (float)$b, (float)$c, (float)$d, (float)$e, (float)$f);

        $this->info("Resultado: El promedio es {$promedio}");
    }
}