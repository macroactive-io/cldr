<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAx;

/**
 * @psalm-immutable
 */
class LocaleSvAx extends LocaleSv
{
    public function territory(): TerritoryAx
    {
        return new TerritoryAx();
    }
}
