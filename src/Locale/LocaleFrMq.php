<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMq;

/**
 * Class LocaleFrMq
 * @psalm-immutable
 */
class LocaleFrMq extends LocaleFr
{
    public function territory(): TerritoryMq
    {
        return new TerritoryMq();
    }
}
