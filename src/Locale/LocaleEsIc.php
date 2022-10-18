<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIc;

/**
 * @psalm-immutable
 */
class LocaleEsIc extends LocaleEs
{
    public function territory(): TerritoryIc
    {
        return new TerritoryIc();
    }
}
