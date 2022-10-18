<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDg;

/**
 * @psalm-immutable
 */
class LocaleEnDg extends LocaleEn
{
    public function territory(): TerritoryDg
    {
        return new TerritoryDg();
    }
}
