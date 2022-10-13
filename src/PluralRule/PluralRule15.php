<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRule15 - Select a plural form for a specified number.
 * Families:
 * Icelandic
 */
class PluralRule15 implements PluralRuleInterface
{
    public function plurals()
    {
        return 2;
    }

    public function plural($number)
    {
        $number = abs($number);

        if ($number % 10 !== 1 || $number % 100 === 11) {
            return 1;
        }

        return 0;
    }
}
