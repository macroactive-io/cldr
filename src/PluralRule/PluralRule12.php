<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRule12 - Select a plural form for a specified number.
 * Families:
 * Semitic (Arabic)
 * nplurals=6; plural=(n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5);
 */
class PluralRule12 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 6;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 0) {
            return 0;
        }

        if ($number === 1) {
            return 1;
        }

        if ($number === 2) {
            return 2;
        }

        if ($number % 100 >= 3 && $number % 100 <= 10) {
            return 3;
        }

        if ($number % 100 >= 11) {
            return 4;
        }

        return 5;
    }
}
