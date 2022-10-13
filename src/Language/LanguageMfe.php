<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LanguageMfe - Representation of the Morisyen language.
 */
class LanguageMfe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mfe';
    }

    public function defaultTerritory()
    {
        return new TerritoryMu();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
