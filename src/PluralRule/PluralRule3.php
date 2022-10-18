<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Baltic (Latvian)
 * nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2);
 */
class PluralRule3 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 1 && $number % 100 !== 11) {
            return 0;
        }

        if ($number !== 0) {
            return 1;
        }

        return 2;
    }
}
