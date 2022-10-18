<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDk;

/**
 * @psalm-immutable
 */
class LocaleFoDk extends LocaleFo
{
    public function territory(): TerritoryDk
    {
        return new TerritoryDk();
    }
}
