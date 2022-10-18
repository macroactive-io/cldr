<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Class LocaleEnUg
 * @psalm-immutable
 */
class LocaleEnUg extends LocaleEn
{
    public function territory(): TerritoryUg
    {
        return new TerritoryUg();
    }
}
