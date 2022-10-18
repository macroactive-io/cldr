<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEc;

/**
 * @psalm-immutable
 */
class LocaleEsEc extends LocaleEs
{
    public function territory(): TerritoryEc
    {
        return new TerritoryEc();
    }
}
