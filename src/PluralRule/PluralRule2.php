<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Romanic (French, Brazilian Portuguese)
 * nplurals=2; plural=(n > 1);
 */
class PluralRule2 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        return abs($number) > 1 ? 1 : 0;
    }

    public function pluralExamples(): array
    {
        return ['one' => [0, 1], 'other' => [2, 3, 9]];
    }
}
