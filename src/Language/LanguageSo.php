<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritorySo;

/**
 * Class LanguageSo - Representation of the Somali language.
 */
class LanguageSo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'so';
    }

    public function defaultTerritory()
    {
        return new TerritorySo();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
