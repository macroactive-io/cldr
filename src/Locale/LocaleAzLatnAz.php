<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAz;

/**
 * @psalm-immutable
 */
class LocaleAzLatnAz extends LocaleAzLatn
{
    public function territory(): TerritoryAz
    {
        return new TerritoryAz();
    }
}
