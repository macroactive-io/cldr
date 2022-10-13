<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageLn - Representation of the Lingala language.
 */
class LanguageLn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ln';
    }

    public function defaultTerritory()
    {
        return new TerritoryCd();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
