<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Baltic (Latvian)
 * nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2);
 */
class PluralRule3 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match (true) {
            $n % 10 === 0 || $n % 100 >= 11 && $n % 100 <= 19 => 0,
            $n % 10 === 1 && $n % 100 !== 11                  => 1,
            default                                           => 2
        };
    }

    public function pluralExamples(): array
    {
        return ['zero' => [0, 10, 11, 20], 'one' => [1, 21, 31], 'other' => [2, 9, 29]];
    }
}
