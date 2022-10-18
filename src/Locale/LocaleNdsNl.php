<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNl;

/**
 * Low German
 *
 * @psalm-immutable
 */
class LocaleNdsNl extends LocaleNds
{
    public function territory(): TerritoryNl
    {
        return new TerritoryNl();
    }
}
