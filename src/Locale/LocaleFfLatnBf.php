<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnBf extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryBf();
    }
}
