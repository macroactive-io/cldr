<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnLr extends LocaleFfLatn
{
    public function territory(): TerritoryLr
    {
        return new TerritoryLr();
    }
}
