<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBm;

/**
 * Class LocaleEnBm
 * @psalm-immutable
 */
class LocaleEnBm extends LocaleEn
{
    public function territory(): TerritoryBm
    {
        return new TerritoryBm();
    }
}
