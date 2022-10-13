<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LanguageRn - Representation of the Rundi language.
 */
class LanguageRn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'rn';
    }

    public function defaultTerritory()
    {
        return new TerritoryBi();
    }
}
