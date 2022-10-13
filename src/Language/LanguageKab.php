<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LanguageKab - Representation of the Kabyle language.
 */
class LanguageKab extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kab';
    }

    public function defaultTerritory()
    {
        return new TerritoryDz();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
