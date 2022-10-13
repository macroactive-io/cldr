<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnMr extends LocaleFfLatn
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
