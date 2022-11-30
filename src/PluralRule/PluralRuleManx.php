<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

class PluralRuleManx implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
    }

    public function plural(int $number): int
    {
        $n = abs($number);

        return match (true) {
            $n % 10 === 1                                                                              => 0,
            $n % 10 === 2                                                                              => 1,
            $n % 100 === 0 || $n % 100 === 20 || $n % 100 === 40 || $n % 100 === 60 || $n % 100 === 80 => 2,
            default                                                                                    => 3,
        };
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1, 11, 71],
            'two'   => [2, 12, 1002],
            'few'   => [0, 20, 40, 180],
            'other' => [3, 10, 13, 19],
        ];
    }
}
