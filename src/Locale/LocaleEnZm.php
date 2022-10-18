<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZm;

/**
 * Class LocaleEnZm
 * @psalm-immutable
 */
class LocaleEnZm extends LocaleEn
{
    public function territory(): TerritoryZm
    {
        return new TerritoryZm();
    }
}
