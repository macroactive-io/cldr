<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Spanish, Catalan, Italian
 * nplurals=3;	n == 1 ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2
 */
class PluralRule1WithMillions implements PluralRuleInterface
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

        return ($n !== 0 && $n % 1_000_000 === 0) ? 1 : 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1],
            'many'  => [1_000_000, 99_000_000],
            'other' => [0, 2, 15],
        ];
    }
}
