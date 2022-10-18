<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAd;

/**
 * @psalm-immutable
 */
class LocaleCaAd extends LocaleCa
{
    public function territory(): TerritoryAd
    {
        return new TerritoryAd();
    }
}
