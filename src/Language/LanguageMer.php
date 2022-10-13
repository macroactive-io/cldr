<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageMer - Representation of the Meru language.
 */
class LanguageMer extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mer';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
