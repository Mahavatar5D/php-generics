<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class HelpersFunctionsTest extends TestCase
{
    public function testArrayFirst(): void
    {
        $this->assertEquals(1, array_first([1,2,3]));
    }
}