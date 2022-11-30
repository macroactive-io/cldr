<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Semitic (Maltese)
 * nplurals=4; plural=(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3);
 */
class PluralRule13 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 5;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        if ($number === 2) {
            return 1;
        }

        if ($number === 0 || ($number % 100 > 1 && $number % 100 < 11)) {
            return 2;
        }

        if ($number % 100 > 10 && $number % 100 < 20) {
            return 3;
        }

        return 4;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1],
            'two'   => [2],
            'few'   => [0, 7, 10, 110],
            'many'  => [11, 19, 119],
            'other' => [20, 35, 100, 120],
        ];
    }
}
