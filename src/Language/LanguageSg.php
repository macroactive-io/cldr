<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LanguageSg - Representation of the Sango language.
 */
class LanguageSg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sg';
    }

    public function defaultTerritory()
    {
        return new TerritoryCf();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
