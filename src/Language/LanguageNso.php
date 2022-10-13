<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageNso - Representation of the Pedi language.
 */
class LanguageNso extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nso';
    }

    public function defaultTerritory()
    {
        return new TerritoryZa();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
