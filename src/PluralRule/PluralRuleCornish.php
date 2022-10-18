<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Class PluralRuleWelsh - Select a plural form for a specified number.
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3;
 */
class PluralRuleCornish implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
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

        if ($number === 3) {
            return 2;
        }

        return 3;
    }
}
