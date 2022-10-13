<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LanguageEn - Representation of the Maori language.
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mi';
    }

    public function defaultTerritory()
    {
        return new TerritoryNz();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
