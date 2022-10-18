<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGm;

/**
 * Class LocaleEnGm
 * @psalm-immutable
 */
class LocaleEnGm extends LocaleEn
{
    public function territory(): TerritoryGm
    {
        return new TerritoryGm();
    }
}
