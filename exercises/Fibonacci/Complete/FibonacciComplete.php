<?php

declare(strict_types=1);

namespace Exercises\Fibonacci\Complete;

use function array_key_exists;
use Exercises\FizzBuzz\Complete\FizzBuzzComplete;

final class FibonacciComplete
{
    /** @var array<int> */
    private static $cache = [];

    public static function get1(int $index): int
    {
        $result = [];

        for ($i = 0; $i <= $index; ++$i) {
            if ($i < 2) {
                $result[] = $i;
            } else {
                $result[] = $result[$i - 1] + $result[$i - 2];
            }
        }

        return $result[$index];
    }


}
echo FibonacciComplete::get1(7);