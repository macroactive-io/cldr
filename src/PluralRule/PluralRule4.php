<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Class PluralRule4 - Select a plural form for a specified number.
 * Families:
 * Celtic (Scottish Gaelic)
 * nplurals=4; plural=(n==1 || n==11) ? 0 : (n==2 || n==12) ? 1 : (n > 2 && n < 20) ? 2 : 3;
 */
class PluralRule4 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1 || $number === 11) {
            return 0;
        }

        if ($number === 2 || $number === 12) {
            return 1;
        }

        if ($number > 2 && $number < 20) {
            return 2;
        }

        return 3;
    }
}
