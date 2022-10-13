<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPa;

/**
 * Class LocaleEsPa
 * @psalm-immutable
 */
class LocaleEsPa extends LocaleEs
{
    public function territory(): TerritoryPa
    {
        return new TerritoryPa();
    }
}
