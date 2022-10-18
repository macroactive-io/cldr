<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNc;

/**
 * @psalm-immutable
 */
class LocaleFrNc extends LocaleFr
{
    public function territory(): TerritoryNc
    {
        return new TerritoryNc();
    }
}
