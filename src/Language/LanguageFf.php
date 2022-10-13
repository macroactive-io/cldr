<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageFf - Representation of the Fulah language.
 */
class LanguageFf extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ff';
    }

    public function defaultTerritory()
    {
        return new TerritorySn();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
