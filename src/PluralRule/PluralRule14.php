<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Slavic (Macedonian)
 */
class PluralRule14 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 1 && $number % 100 !== 11) {
            return 0;
        }

        return 1;
    }

    public function pluralExamples(): array
    {
        return ['one' => [1, 21, 101], 'other' => [0, 2, 16, 100]];
    }
}
