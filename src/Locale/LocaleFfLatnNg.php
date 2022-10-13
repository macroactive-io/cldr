<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnNg extends LocaleFfLatn
{
    public function territory(): TerritoryNg
    {
        return new TerritoryNg();
    }
}
