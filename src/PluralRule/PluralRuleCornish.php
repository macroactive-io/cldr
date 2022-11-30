<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=6; n == 0 ? 0 : n == 1 ? 1 : (n % 100 == 2 || n % 100 == 22 || n % 100 == 42 || n % 100 == 62 || n % 100 == 82) || n % 1000 == 0 && (n % 100000 >= 1000 && n % 100000 <= 20000 || n % 100000 == 40000 || n % 100000 == 60000 || n % 100000 == 80000) || n != 0 && n % 1000000 == 100000 ? 2 : (n % 100 == 3 || n % 100 == 23 || n % 100 == 43 || n % 100 == 63 || n % 100 == 83) ? 3 : n != 1 && (n % 100 == 1 || n % 100 == 21 || n % 100 == 41 || n % 100 == 61 || n % 100 == 81) ? 4 : 5
 */
class PluralRuleCornish implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 6;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match (true) {
            0 === $n => 0,
            1 === $n => 1,
            ($n % 100 == 2 || $n % 100 == 22 || $n % 100 == 42 || $n % 100 == 62 || $n % 100 == 82) || $n % 1000 == 0 && ($n % 100000 >= 1000 && $n % 100000 <= 20000 || $n % 100000 == 40000 || $n % 100000 == 60000 || $n % 100000 == 80000) || $n != 0 && $n % 1000000 == 100000 => 2,
            ($n % 100 == 3 || $n % 100 == 23 || $n % 100 == 43 || $n % 100 == 63 || $n % 100 == 83) => 3,
            $n != 1 && ($n % 100 == 1 || $n % 100 == 21 || $n % 100 == 41 || $n % 100 == 61 || $n % 100 == 81) => 4,
            default => 5,
        };
    }

    public function pluralExamples(): array
    {
        return [
            'zero' => [0],
            'one' => [1,],
            'two' => [2],
            'few' => [3, 23, 183],
            'many' => [21, 41, 161],
            'other' => [4, 9, 19, 1004]
        ];
    }
}
