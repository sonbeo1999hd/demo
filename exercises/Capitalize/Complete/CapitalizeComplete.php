<?php

declare(strict_types=1);

namespace Exercises\Capitalize\Complete;

use function array_map;
use function explode;
use function implode;
use function strtoupper;
use function substr;
use function ucwords;

final class CapitalizeComplete
{
    public static function get1(string $string): string
    {
        return ucwords($string);
    }
}
echo CapitalizeComplete::get1("cong hoa ha hoi chu nghia viet nam");


