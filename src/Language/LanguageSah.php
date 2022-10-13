<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageSah - Representation of the Yakut language.
 */
class LanguageSah extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sah';
    }

    public function defaultTerritory()
    {
        return new TerritoryRu();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
