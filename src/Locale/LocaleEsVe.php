<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVe;

/**
 * Class LocaleEsVe
 * @psalm-immutable
 */
class LocaleEsVe extends LocaleEs
{
    public function territory(): TerritoryVe
    {
        return new TerritoryVe();
    }
}
