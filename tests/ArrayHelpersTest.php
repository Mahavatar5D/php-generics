<?php

namespace App\Tests;

use App\ArrayHelpers;
use PHPUnit\Framework\TestCase;

class ArrayHelpersTest extends TestCase
{
    public function testArrayFisrt(): void
    {
        $x = (new ArrayHelpers())->arrayFirst([1,2,3]);

        $this->assertEquals(1, $x);
    }
}
