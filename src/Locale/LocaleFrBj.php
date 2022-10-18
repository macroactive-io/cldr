<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBj;

/**
 * @psalm-immutable
 */
class LocaleFrBj extends LocaleFr
{
    public function territory(): TerritoryBj
    {
        return new TerritoryBj();
    }
}
