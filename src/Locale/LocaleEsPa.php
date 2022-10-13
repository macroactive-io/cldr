<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPa;

/**
 * Class LocaleEsPa
 */
class LocaleEsPa extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPa();
    }
}
