<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNg;

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
