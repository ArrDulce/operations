<?php

namespace Tests\Unit;

use App\Http\Controllers\ExponenteController;
use PHPUnit\Framework\TestCase;

class ExponenteTest extends TestCase
{
    public function test_calculo_potencia_result(): void
    {
        $controller = new ExponenteController;

        $result = $controller->calcularPotencia(4.0, 3.0);

        $this->assertIsFloat($result);
        $this->assertNotNull($result);
        $this->assertEquals(64.0, $result);
    }
}
