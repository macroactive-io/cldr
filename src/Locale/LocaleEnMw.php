<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMw;

/**
 * @psalm-immutable
 */
class LocaleEnMw extends LocaleEn
{
    public function territory(): TerritoryMw
    {
        return new TerritoryMw();
    }
}
