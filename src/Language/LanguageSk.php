<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Territory\TerritorySk;

/**
 * Class LanguageSk - Representation of the Slovak language.
 */
class LanguageSk extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sk';
    }

    public function defaultTerritory()
    {
        return new TerritorySk();
    }

    public function pluralRule()
    {
        return new PluralRule8();
    }
}
