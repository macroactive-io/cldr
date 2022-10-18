<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGt;

/**
 * Class LocaleEsGt
 * @psalm-immutable
 */
class LocaleEsGt extends LocaleEs
{
    public function territory(): TerritoryGt
    {
        return new TerritoryGt();
    }
}
