<?php
class PromedioTest extends TestCase
{
    /**
     * Prueba del promedio con números variados.
     */
    public function test_average_result_varied_numbers(): void
    {
        $controller = new OperationsController;

        $result = $controller->average(
            a: 10,
            b: 8,
            c: 9,
            d: 7,
            e: 6,
            f: 10
        );

        $this->assertIsFloat($result);
        $this->assertNotNull($result);
        $this->assertEquals(8.333333333333334, $result);
        $this->assertGreaterThan(0, $result);
        $this->assertLessThan(10, $result);

        // NUEVOS ASSERTS
        $this->assertIsNumeric($result);
        $this->assertNotEquals(0, $result);
        $this->assertEqualsWithDelta(8.3333, $result, 0.0001);
        $this->assertTrue($result > 8);
        $this->assertTrue($result < 9);
    }
 }