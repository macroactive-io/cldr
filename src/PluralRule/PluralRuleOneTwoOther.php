<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleOneTwoOther - Select a plural form for a specified number.
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : 2;
 */
class PluralRuleOneTwoOther implements PluralRuleInterface
{
    public function plurals()
    {
        return 3;
    }

    public function plural($number)
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
