<?php

declare(strict_types=1);

namespace Exercises\Reverse\Complete;

use function abs;
use function array_reduce;
use function array_reverse;
use function implode;
use function log10;
use function mb_strlen;
use function mb_substr;
use function pow;
use function str_split;
use function strlen;
use function strrev;

final class ReverseComplete
{
    public static function string1(string $string): string
    {
        return strrev($string);
    }

}

echo ReverseComplete::string1("thang");