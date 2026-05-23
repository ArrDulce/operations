<?php

namespace Tests\Unit;

use App\Http\Controllers\ConversionUtilityController;
use Tests\TestCase;

class ConversionUtilityTest extends TestCase
{
    public function test_celsius_to_fahrenheit()
    {
        $controller = new ConversionUtilityController;

        $result = $controller->cToF(0); // 0°C = 32°F

        $this->assertEquals(32, $result);
    }
}

