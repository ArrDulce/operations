<?php

namespace Tests\Unit;

use App\Http\Controllers\GenerateHashController;
// 1. IMPORTANTE: Ajusta esta ruta a donde esté realmente tu controlador
use PHPUnit\Framework\TestCase;

class GenerateHashTest extends TestCase
{
    public function test_generate_hash(): void
    {
        $controller = new GenerateHashController;

        $result = $controller->generateHash('admin');

        $this->assertNotEmpty($result);
        $this->assertIsString($result);
        $this->assertEquals(64, strlen($result));
        $this->assertMatchesRegularExpression('/^[a-f0-9]{64}$/', $result);
        $this->assertNotEquals('admin', $result);
    }
}
