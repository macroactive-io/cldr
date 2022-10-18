<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGi;

/**
 * Class LocaleEnGi
 * @psalm-immutable
 */
class LocaleEnGi extends LocaleEn
{
    public function territory(): TerritoryGi
    {
        return new TerritoryGi();
    }
}
