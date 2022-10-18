<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPs;

/**
 * @psalm-immutable
 */
class LocaleArPs extends LocaleAr
{
    public function territory(): TerritoryPs
    {
        return new TerritoryPs();
    }
}
