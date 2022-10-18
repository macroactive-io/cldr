<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAf;

/**
 * Class LocaleFaAf
 * @psalm-immutable
 */
class LocaleFaAf extends LocaleFa
{
    public function territory(): TerritoryAf
    {
        return new TerritoryAf();
    }
}
