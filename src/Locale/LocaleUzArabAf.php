<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAf;

/**
 * Class LocaleUzArabAf
 * @psalm-immutable
 */
class LocaleUzArabAf extends LocaleUzArab
{
    public function territory(): TerritoryAf
    {
        return new TerritoryAf();
    }
}
