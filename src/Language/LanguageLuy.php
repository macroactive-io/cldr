<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageLuy - Representation of the Luyia language.
 */
class LanguageLuy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'luy';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
