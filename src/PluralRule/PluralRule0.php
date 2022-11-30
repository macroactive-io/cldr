<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Families:
 * Asian (Chinese, Japanese, Korean, Vietnamese),
 * Persian,
 * Turkic/Altaic (Turkish),
 * Thai,
 * Lao
 * nplurals=1; plural=0;
 */
class PluralRule0 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 1;
    }

    public function plural(int $number): int
    {
        return 0;
    }

    public function pluralExamples(): array
    {
        return ['other' => [0, 1, 2]];
    }
}
