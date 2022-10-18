<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBi;

/**
 * Class LocaleFrBi
 * @psalm-immutable
 */
class LocaleFrBi extends LocaleFr
{
    public function territory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
