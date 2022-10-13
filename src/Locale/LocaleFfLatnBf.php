<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnBf extends LocaleFfLatn
{
    public function territory(): TerritoryBf
    {
        return new TerritoryBf();
    }
}
