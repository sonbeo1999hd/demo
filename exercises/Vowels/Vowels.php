<?php
final class vowels{
    public static function count(string $string): int
    {
        $counter = 0;
        $length = strlen($string);
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        for ($i = 0; $i < $length; ++$i) {
            if (in_array(strtolower($string[$i]), $vowels, true)) {
                ++$counter;
            }
        }

        return $counter;
    }
}

echo vowels::count("thang dep trai");