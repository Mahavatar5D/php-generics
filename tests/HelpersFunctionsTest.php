<?php

namespace App\Tests;

use App\A;
use PHPUnit\Framework\TestCase;

/** @psalm-suppress PropertyNotSetInConstructor **/
class HelpersFunctionsTest extends TestCase
{
    public function testArrayFirst(): void
    {
        $this->assertEquals(1, array_first([1,2,3]));
    }

    public function testtakesClassName(): void
    {
        $r2 = takesClassName(A::class);

        $this->assertEquals("App\A", $r2);
    }
}
