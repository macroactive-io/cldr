<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGw extends LocaleFfLatn
{
    public function territory(): TerritoryGw
    {
        return new TerritoryGw();
    }
}
