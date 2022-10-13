<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnMr extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryMr();
    }
}
