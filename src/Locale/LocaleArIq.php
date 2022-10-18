<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIq;

/**
 * @psalm-immutable
 */
class LocaleArIq extends LocaleAr
{
    public function territory(): TerritoryIq
    {
        return new TerritoryIq();
    }
}
