<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMq;

/**
 * @psalm-immutable
 */
class LocaleFrMq extends LocaleFr
{
    public function territory(): TerritoryMq
    {
        return new TerritoryMq();
    }
}
