<?php

declare(strict_types=1);

namespace Macroactive\Cldr\PluralRule;

/**
 * Class PluralRule0 - Select a plural form for a specified number.
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
}
