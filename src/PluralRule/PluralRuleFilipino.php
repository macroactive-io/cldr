<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Class PluralRuleFilipino - Select a plural form for a specified number.
 * nplurals=2; plural=n % 10 != 4 && n%10 != 6 && n%10 != 9;
 *
 * @psalm-immutable
 */
class PluralRuleFilipino implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 4 || $number % 10 === 6 || $number % 10 === 9) {
            return 1;
        }

        return 0;
    }

    public function pluralExamples(): array
    {
        return [
            'one'   => [0, 1, 5],
            'other' => [4, 6, 9, 14],
        ];
    }
}
