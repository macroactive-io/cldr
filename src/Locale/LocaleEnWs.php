<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryWs;

/**
 * Class LocaleEnWs
 * @psalm-immutable
 */
class LocaleEnWs extends LocaleEn
{
    public function territory(): TerritoryWs
    {
        return new TerritoryWs();
    }
}
