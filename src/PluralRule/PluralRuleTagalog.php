<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=2; plural=n % 10 != 4 && n%10 != 6 && n%10 != 9;
 */
class PluralRuleTagalog implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 4 || $number % 10 === 6 || $number % 10 === 9) {
            return 1;
        }

        return 0;
    }
}
