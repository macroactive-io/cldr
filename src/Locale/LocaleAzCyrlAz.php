<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAz;

/**
 * Class LocaleAzCyrlAz
 * @psalm-immutable
 */
class LocaleAzCyrlAz extends LocaleAzCyrl
{
    public function territory(): TerritoryAz
    {
        return new TerritoryAz();
    }
}
