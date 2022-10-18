<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTw;

/**
 * @psalm-immutable
 */
class LocaleZhHantTw extends LocaleZhHant
{
    public function territory(): TerritoryTw
    {
        return new TerritoryTw();
    }
}
