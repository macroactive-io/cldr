<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Slavic (Polish)
 * nplurals=3; plural=(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);
 */
class PluralRule9 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        if ($n === 1) {
            return 0;
        }

        return ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 12 || $n % 100 > 14)) ? 1 : 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1],
            'few'   => [2, 3, 24],
            'other' => [0, 5, 19],
        ];
    }
}
