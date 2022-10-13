<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LanguageNaq - Representation of the Nama (Namibia) language.
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
