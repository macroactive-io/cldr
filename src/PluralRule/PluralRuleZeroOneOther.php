<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleZeroOneOther - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0) ? 0 : (n==1) ? 1 : 2;
 */
class PluralRuleZeroOneOther implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
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

        return 2;
    }
}
