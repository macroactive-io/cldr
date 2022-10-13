<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleTachelhit - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0 || n==1) ? 0 : (n>=2 && n<=10) ? 1 : 2;
 */
class PluralRuleTachelhit implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 0 || $number === 1) {
            return 0;
        }

        if ($number >= 2 && $number <= 10) {
            return 1;
        }

        return 2;
    }
}
