<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryMz;

/**
 * Class LanguageMgh - Representation of the Makhuwa-Meetto language.
 */
class LanguageMgh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mgh';
    }

    public function defaultTerritory()
    {
        return new TerritoryMz();
    }
}
