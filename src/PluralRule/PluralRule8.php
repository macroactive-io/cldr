<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Slavic (Slovak, Czech)
 * nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;
 */
class PluralRule8 implements PluralRuleInterface
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

        if ($number >= 2 && $number <= 4) {
            return 1;
        }

        return 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [1,],
            'few' => [2, 3, 4],
            'other' => [5, 17, 19]
        ];
    }
}
