<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritorySz;

/**
 * Class LanguageSs - Representation of the Swati language.
 */
class LanguageSs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ss';
    }

    public function defaultTerritory()
    {
        return new TerritorySz();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
