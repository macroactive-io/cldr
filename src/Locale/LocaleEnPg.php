<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPg;

/**
 * @psalm-immutable
 */
class LocaleEnPg extends LocaleEn
{
    public function territory(): TerritoryPg
    {
        return new TerritoryPg();
    }
}
