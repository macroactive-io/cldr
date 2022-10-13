<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGm;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnGm extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryGm();
    }
}
