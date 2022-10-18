<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBa;

/**
 * Class LocaleSrCyrlBa
 * @psalm-immutable
 */
class LocaleSrCyrlBa extends LocaleSrCyrl
{
    public function territory(): TerritoryBa
    {
        return new TerritoryBa();
    }
}
