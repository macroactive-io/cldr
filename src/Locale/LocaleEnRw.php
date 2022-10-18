<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryRw;

/**
 * Class LocaleEnRw
 * @psalm-immutable
 */
class LocaleEnRw extends LocaleEn
{
    public function territory(): TerritoryRw
    {
        return new TerritoryRw();
    }
}
