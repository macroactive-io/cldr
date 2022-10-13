<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LanguageSv - Representation of the Swedish language.
 */
class LanguageSv extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sv';
    }

    public function defaultTerritory()
    {
        return new TerritorySe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
