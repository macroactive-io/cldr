<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=4; plural=(n % 10 == 1) ? 0 : ((n % 10 == 2) ? 1 : ((n % 20 == 0) ? 2 : 3));
 */
class PluralRuleManx implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 1) {
            return 0;
        }

        if ($number % 10 === 2) {
            return 1;
        }

        if ($number % 20 === 0) {
            return 2;
        }

        return 3;
    }
}
