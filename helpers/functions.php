<?php

/**
 * @template T
 * @param T[] $list
 * @return T|null
 */
function array_first(array $list)
{
    return array_shift($list);
}

/**
 * @param class-string $s
 *
 * @return class-string
 */
function takesClassName(string $s): string
{
    return $s;
}
