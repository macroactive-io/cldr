<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBf;

/**
 * Class LocaleFrBf
 * @psalm-immutable
 */
class LocaleFrBf extends LocaleFr
{
    public function territory(): TerritoryBf
    {
        return new TerritoryBf();
    }
}
