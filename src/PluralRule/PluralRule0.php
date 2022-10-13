<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

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
    public function plurals()
    {
        return 1;
    }

    public function plural($number)
    {
        return 0;
    }
}
