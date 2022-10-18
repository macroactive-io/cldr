<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Romanic (French, Brazilian Portuguese)
 * nplurals=2; plural=(n > 1);
 */
class PluralRule2 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number > 1) {
            return 1;
        }

        return 0;
    }
}
