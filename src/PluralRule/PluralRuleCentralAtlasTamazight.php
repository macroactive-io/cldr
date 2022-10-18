<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=4; plural=(n>=2 && n<=10 || n>99) ? 1 : 0
 */
class PluralRuleCentralAtlasTamazight implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number >= 2 && $number <= 10 || $number > 99) {
            return 1;
        }

        return 0;
    }
}
