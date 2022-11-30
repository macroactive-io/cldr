<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMv;

/**
 * Class LocaleEnMv
 *
 * @psalm-immutable
 */
class LocaleEnMv extends LocaleEn
{
    public function territory(): TerritoryMv
    {
        return new TerritoryMv();
    }
}
