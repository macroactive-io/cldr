<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryJm;

/**
 * @psalm-immutable
 */
class LocaleEnJm extends LocaleEn
{
    public function territory(): TerritoryJm
    {
        return new TerritoryJm();
    }
}
