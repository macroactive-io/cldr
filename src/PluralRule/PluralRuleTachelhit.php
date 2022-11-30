<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * nplurals=4; plural=(n==0 || n==1) ? 0 : (n>=2 && n<=10) ? 1 : 2;
 */
class PluralRuleTachelhit implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 0 || $number === 1) {
            return 0;
        }

        if ($number >= 2 && $number <= 10) {
            return 1;
        }

        return 2;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [0, 1,],
            'few'   => [2, 7, 10],
            'other' => [11, 26, 100, 101],
        ];
    }
}
