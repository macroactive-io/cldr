<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnGw extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryGw();
    }
}
