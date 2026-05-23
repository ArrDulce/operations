<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
// 1. IMPORTANTE: Ajusta esta ruta a donde esté realmente tu controlador
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_addition_result(): void
    {
        // Instanciamos el controlador
        $controller = new OperationsController;

        // Ejecutamos el método (los argumentos nombrados a: y b: están perfectos para PHP 8+)
        $result = $controller->addition(a: 4, b: 9);

        // 2. CORRECCIÓN: El método correcto es assertIsInt
        $this->assertIsInt($result);
        $this->assertNotNull($result);

        // Comprobamos el resultado esperado
        $this->assertEquals(13, $result);
        $this->assertGreaterThan(4, $result);
    }
}
