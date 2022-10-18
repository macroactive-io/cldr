<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTw;

/**
 * Class LocaleZhHantTw
 * @psalm-immutable
 */
class LocaleZhHantTw extends LocaleZhHant
{
    public function territory(): TerritoryTw
    {
        return new TerritoryTw();
    }
}
