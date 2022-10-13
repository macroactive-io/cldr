<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnGn extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryGn();
    }
}
