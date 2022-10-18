<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAz;

/**
 * @psalm-immutable
 */
class LocaleAzCyrlAz extends LocaleAzCyrl
{
    public function territory(): TerritoryAz
    {
        return new TerritoryAz();
    }
}
