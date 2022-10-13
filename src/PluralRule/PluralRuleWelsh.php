<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleWelsh - Select a plural form for a specified number.
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3;
 */
class PluralRuleWelsh implements PluralRuleInterface
{
    public function plurals()
    {
        return 4;
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

        if ($number !== 8 && $number !== 11) {
            return 2;
        }

        return 3;
    }
}
