<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGa;

/**
 * @psalm-immutable
 */
class LocaleFrGa extends LocaleFr
{
    public function territory(): TerritoryGa
    {
        return new TerritoryGa();
    }
}
