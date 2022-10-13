<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LanguageMg - Representation of the Malagasy language.
 */
class LanguageMg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mg';
    }

    public function defaultTerritory()
    {
        return new TerritoryMg();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
