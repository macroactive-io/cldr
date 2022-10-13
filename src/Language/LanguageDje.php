<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LanguageDje - Representation of the Zarma language.
 */
class LanguageDje extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dje';
    }

    public function defaultTerritory()
    {
        return new TerritoryNe();
    }
}
