<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Baltic (Lithuanian)
 * nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 || n%100>=20) ? 1 : 2);
 */
class PluralRule6 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match (true) {
            $n % 10 == 1 && ($n % 100 < 11 || $n % 100 > 19) => 0,
            $n % 10 >= 2 && $n % 10 <= 9 && ($n % 100 < 11 || $n % 100 > 19) => 1,
            default => 2
        };
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [1, 21,],
            'few' => [2, 9, 28],
            'other' => [0, 11, 19, 100],
        ];
    }
}
