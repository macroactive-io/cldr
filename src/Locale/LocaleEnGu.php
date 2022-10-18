<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGu;

/**
 * @psalm-immutable
 */
class LocaleEnGu extends LocaleEn
{
    public function territory(): TerritoryGu
    {
        return new TerritoryGu();
    }
}
