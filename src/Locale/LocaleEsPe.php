<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPe;

/**
 * Class LocaleEsPe
 * @psalm-immutable
 */
class LocaleEsPe extends LocaleEs
{
    public function territory(): TerritoryPe
    {
        return new TerritoryPe();
    }
}
