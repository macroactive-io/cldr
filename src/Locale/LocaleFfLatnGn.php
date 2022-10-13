<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGn extends LocaleFfLatn
{
    public function territory(): TerritoryGn
    {
        return new TerritoryGn();
    }
}
