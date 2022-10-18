<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * @psalm-immutable
 */
class LocaleTnZa extends LocaleTn
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
