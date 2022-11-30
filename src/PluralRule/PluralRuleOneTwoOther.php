<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : 2;
 */
class PluralRuleOneTwoOther implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        return match (abs($number)) {
            1       => 0,
            2       => 1,
            default => 2,
        };
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1],
            'two'   => [2],
            'other' => [3, 9, 12],
        ];
    }
}
