<?php

declare(strict_types=1);

namespace Exercises\Numbers\Complete;

final class NumbersComplete
{


    public static function add2(int $n): int
    {
        $total = 0;

        for ($i = 1; $i <= $n; ++$i) {
            $total += $i;
        }

        return $total;
    }
}
echo NumbersComplete::add2(4);