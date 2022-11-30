<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Romanic (Romanian)
 * nplurals=3; plural=(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2);
 */
class PluralRule5 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        if ($number === 0 || ($number % 100 > 0 && $number % 100 < 20)) {
            return 1;
        }

        return 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [1,],
            'few' => [0, 2, 15, 101],
            'other' => [21, 100],
        ];
    }
}
