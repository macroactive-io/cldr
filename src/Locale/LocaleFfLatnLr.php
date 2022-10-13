<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnLr extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryLr();
    }
}
