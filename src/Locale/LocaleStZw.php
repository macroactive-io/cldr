<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZw;

/**
 * Class LocaleStZw
 * @psalm-immutable
 */
class LocaleStZw extends LocaleSt
{
    public function territory(): TerritoryZw
    {
        return new TerritoryZw();
    }
}
