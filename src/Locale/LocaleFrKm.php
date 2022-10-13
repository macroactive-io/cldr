<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKm;

/**
 * Class LocaleFrKm
 * @psalm-immutable
 */
class LocaleFrKm extends LocaleFr
{
    public function territory(): TerritoryKm
    {
        return new TerritoryKm();
    }
}
