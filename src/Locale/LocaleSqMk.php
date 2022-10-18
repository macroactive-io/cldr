<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMk;

/**
 * Class LocaleSqMk
 * @psalm-immutable
 */
class LocaleSqMk extends LocaleSq
{
    public function territory(): TerritoryMk
    {
        return new TerritoryMk();
    }
}
