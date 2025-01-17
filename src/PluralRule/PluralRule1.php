<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Germanic (Danish, Dutch, English, Faroese, Frisian, German, Norwegian, Swedish)
 * Finno-Ugric (Estonian, Finnish, Hungarian)
 * AbstractLanguage isolate (Basque)
 * Latin/Greek (Greek)
 * Semitic (Hebrew)
 * Romanic (Italian, Portuguese, Spanish, Catalan)
 * nplurals=2; plural=(n != 1);
 */
class PluralRule1 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        return 1;
    }

    public function pluralExamples(): array
    {
        return ['one' => [1], 'other' => [0, 2, 15]];
    }
}
