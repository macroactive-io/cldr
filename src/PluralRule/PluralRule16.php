<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Celtic (Breton)
 * nplurals=2; plural=(n > 1);
 * is 1: 1
 * ends in 1, excluding 1, 11, 71, 91: 21, 31, 41, 51, 61, 81, 101, 121, 131, 141, 151, 161, 181, 201, 221, 231, 241, 251, 261, 281, ...
 * ends in 2, excluding 12, 72, 92: 2, 22, 32, 42, 52, 62, 82, 102, 122, 132, 142, 152, 162, 182, 202, 222, 232, 242, 252, 262, 282, ...
 * ends in 3, 4 or 9 excluding 13, 14, 19, 73, 74, 79, 93, 94, 99: 3, 4, 9, 23, 24, 29, 33, 34, 39, 43, 44, 49, 53, 54, 59, ...
 * ends in 1000000: 1000000: 1000000, 2000000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000, ...
 * everything else: 0, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 25, 26, 27, 28, 30, 35, 36, 37, 38, 40, ...
 */
class PluralRule16 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 5;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match (true) {
            $n % 10 == 1 && $n % 100 != 11 && $n % 100 != 71 && $n % 100 != 91 => 0,
            $n % 10 == 2 && $n % 100 != 12 && $n % 100 != 72 && $n % 100 != 92 => 1,
            (($n % 10 == 3 || $n % 10 == 4) || $n % 10 == 9) && ($n % 100 < 10 || $n % 100 > 19) && ($n % 100 < 70 || $n % 100 > 79) && ($n % 100 < 90 || $n % 100 > 99) => 2,
            $n != 0 && $n % 1000000 == 0 => 3,
            default => 4
        };
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [1, 21, 101],
            'two' => [2, 22, 102],
            'few' => [3, 4, 9, 49, 103],
            'many' => [1_000_000, 1_000_000_000],
            'other' => [0, 5, 8, 19],
        ];
    }
}
