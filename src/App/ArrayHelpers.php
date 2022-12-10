<?php

namespace App;

class ArrayHelpers
{
    public function __construct()
    {
    }

    /**
     * @template T
     * @param T[] $list
     * @return T|null
     */
    public function arrayFirst(array $list)
    {
        return array_shift($list);
    }
}
