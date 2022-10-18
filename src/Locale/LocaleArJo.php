<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryJo;

/**
 * @psalm-immutable
 */
class LocaleArJo extends LocaleAr
{
    public function territory(): TerritoryJo
    {
        return new TerritoryJo();
    }
}
