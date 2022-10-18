<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * @psalm-immutable
 */
class LocaleCaIt extends LocaleCa
{
    public function territory(): TerritoryIt
    {
        return new TerritoryIt();
    }
}
