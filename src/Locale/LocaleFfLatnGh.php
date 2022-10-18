<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGh extends LocaleFfLatn
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
