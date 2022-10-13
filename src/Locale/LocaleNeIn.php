<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleNeIn
 */
class LocaleNeIn extends LocaleNe
{
    public function territory()
    {
        return new TerritoryIn();
    }
}
