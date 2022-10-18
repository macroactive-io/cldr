<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryNa;

/**
 * Nama (Namibia)
 *
 * @psalm-immutable
 */
class LanguageNaq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'naq';
    }

    public function defaultTerritory(): TerritoryNa
    {
        return new TerritoryNa();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
