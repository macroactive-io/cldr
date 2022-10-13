<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LanguageQu - Representation of the Quechua language.
 */
class LanguageQu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'qu';
    }

    public function defaultTerritory()
    {
        return new TerritoryPe();
    }
}
