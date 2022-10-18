<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBw;

/**
 * Class LocaleEnBw
 * @psalm-immutable
 */
class LocaleEnBw extends LocaleEn
{
    public function territory(): TerritoryBw
    {
        return new TerritoryBw();
    }
}
