<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Romanic (French, Brazilian Portuguese)
 * nplurals=3; (n == 0 || n == 1) ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2
 */
class PluralRule2WithMillions implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        if ($n < 2) {
            return 0;
        }

        return $n % 1000000 === 0 ? 1 : 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one' => [0, 1],
            'many' => [1_000_000, 99_000_000],
            'other' => [2, 3, 9]
        ];
    }
}
