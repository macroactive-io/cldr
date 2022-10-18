<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIl;

/**
 * Class LocaleArIl
 * @psalm-immutable
 */
class LocaleArIl extends LocaleAr
{
    public function territory(): TerritoryIl
    {
        return new TerritoryIl();
    }
}
