<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryXk;

/**
 * @psalm-immutable
 */
class LocaleSrLatnXk extends LocaleSrLatn
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
