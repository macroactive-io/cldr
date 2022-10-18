<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Class LocaleSsZa
 * @psalm-immutable
 */
class LocaleSsZa extends LocaleSs
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
