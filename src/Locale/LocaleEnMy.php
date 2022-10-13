<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleEnMy
 */
class LocaleEnMy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMy();
    }
}
