<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Slavic (Slovenian, Sorbian)
 * nplurals=4; plural=(n%100==1 ? 1 : n%100==2 ? 2 : n%100==3 || n%100==4 ? 3 : 0);
 */
class PluralRule10 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 100 === 1) {
            return 0;
        }

        if ($number % 100 === 2) {
            return 1;
        }

        if ($number % 100 === 3 || $number % 100 === 4) {
            return 2;
        }

        return 3;
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [1,101, ],
            'two' => [2, 102],
            'few' => [3, 4, 104],
            'other' => [5, 17, 100]
        ];
    }
}
