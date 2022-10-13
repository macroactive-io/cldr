<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LanguageZgh - Representation of the Standard Moroccan Tamazight language.
 */
class LanguageZgh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'zgh';
    }

    public function defaultTerritory()
    {
        return new TerritoryMa();
    }
}
