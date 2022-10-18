<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZw;

/**
 * @psalm-immutable
 */
class LocaleStZw extends LocaleSt
{
    public function territory(): TerritoryZw
    {
        return new TerritoryZw();
    }
}
