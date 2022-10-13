<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageEbu - Representation of the Embu language.
 */
class LanguageEbu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ebu';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
