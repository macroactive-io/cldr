<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPn;

/**
 * Class LocaleEnPn
 * @psalm-immutable
 */
class LocaleEnPn extends LocaleEn
{
    public function territory(): TerritoryPn
    {
        return new TerritoryPn();
    }
}
