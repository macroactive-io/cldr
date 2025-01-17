<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * @psalm-immutable
 */
class LocaleHaNe extends LocaleHa
{
    public function territory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
