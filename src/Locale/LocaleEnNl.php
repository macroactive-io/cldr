<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNl;

/**
 * English
 *
 * @psalm-immutable
 */
class LocaleEnNl extends LocaleEn
{
    public function territory(): TerritoryNl
    {
        return new TerritoryNl();
    }
}
