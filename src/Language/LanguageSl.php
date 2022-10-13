<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Territory\TerritorySi;

/**
 * Class LanguageSl - Representation of the Slovenian language.
 */
class LanguageSl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sl';
    }

    public function defaultTerritory()
    {
        return new TerritorySi();
    }

    public function pluralRule()
    {
        return new PluralRule10();
    }
}
