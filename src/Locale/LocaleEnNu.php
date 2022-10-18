<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNu;

/**
 * @psalm-immutable
 */
class LocaleEnNu extends LocaleEn
{
    public function territory(): TerritoryNu
    {
        return new TerritoryNu();
    }
}
