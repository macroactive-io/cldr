<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageDav - Representation of the Taita language.
 */
class LanguageDav extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dav';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
