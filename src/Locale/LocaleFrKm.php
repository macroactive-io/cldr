<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKm;

/**
 * Class LocaleFrKm
 */
class LocaleFrKm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryKm();
    }
}
