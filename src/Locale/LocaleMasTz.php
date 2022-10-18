<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * @psalm-immutable
 */
class LocaleMasTz extends LocaleMas
{
    public function territory(): TerritoryTz
    {
        return new TerritoryTz();
    }
}
