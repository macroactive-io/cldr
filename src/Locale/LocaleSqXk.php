<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryXk;

/**
 * @psalm-immutable
 */
class LocaleSqXk extends LocaleSq
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
