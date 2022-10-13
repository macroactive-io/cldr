<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LanguageTwq - Representation of the Tasawaq language.
 */
class LanguageTwq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'twq';
    }

    public function defaultTerritory()
    {
        return new TerritoryNe();
    }
}
