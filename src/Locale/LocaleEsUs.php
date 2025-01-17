<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUs;

/**
 * @psalm-immutable
 */
class LocaleEsUs extends LocaleEs
{
    public function territory(): TerritoryUs
    {
        return new TerritoryUs();
    }
}
