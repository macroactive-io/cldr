<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMp;

/**
 * @psalm-immutable
 */
class LocaleEnMp extends LocaleEn
{
    public function territory(): TerritoryMp
    {
        return new TerritoryMp();
    }
}
