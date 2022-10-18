<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : 2;
 */
class PluralRuleOneTwoOther implements PluralRuleInterface
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

        if ($number === 2) {
            return 1;
        }

        return 2;
    }
}
