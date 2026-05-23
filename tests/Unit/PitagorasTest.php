<?php

namespace Tests\Unit;

use App\Http\Controllers\PitagorasController;
use PHPUnit\Framework\TestCase;

class PitagorasTest extends TestCase
{
    public function test_calculo_hipotenusa_result(): void
    {
        $controller = new PitagorasController;

        $result = $controller->calcularHipotenusa(3.0, 4.0);

        $this->assertIsFloat($result);
        $this->assertNotNull($result);
        $this->assertEquals(5.0, $result);
    }
}
