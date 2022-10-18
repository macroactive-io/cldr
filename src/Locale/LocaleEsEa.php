<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEa;

/**
 * Class LocaleEsEa
 * @psalm-immutable
 */
class LocaleEsEa extends LocaleEs
{
    public function territory(): TerritoryEa
    {
        return new TerritoryEa();
    }
}
