<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

class PluralRuleWelsh implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 6;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match ($n) {
            0       => 0,
            1       => 1,
            2       => 2,
            3       => 3,
            6       => 4,
            default => 5
        };
    }

    public function pluralExamples(): array
    {
        return [
            'zero'  => [0],
            'one'   => [1],
            'two'   => [2],
            'few'   => [3],
            'many'  => [6],
            'other' => [4, 5, 7, 19],
        ];
    }
}
