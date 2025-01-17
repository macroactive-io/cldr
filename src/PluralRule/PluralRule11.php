<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Celtic (Irish Gaelic)
 * nplurals=5; plural=n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4;
 */
class PluralRule11 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 5;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        if ($number === 2) {
            return 1;
        }

        if ($number > 2 && $number < 7) {
            return 2;
        }

        if ($number > 6 && $number < 11) {
            return 3;
        }

        return 4;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [1],
            'two'   => [2],
            'few'   => [3, 4, 6],
            'many'  => [7, 10],
            'other' => [11, 25, 100],
        ];
    }
}
