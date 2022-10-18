<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIl;

/**
 * Class LocaleEnIl
 * @psalm-immutable
 */
class LocaleEnIl extends LocaleEn
{
    public function territory(): TerritoryIl
    {
        return new TerritoryIl();
    }
}
