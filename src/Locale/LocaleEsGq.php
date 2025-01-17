<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGq;

/**
 * @psalm-immutable
 */
class LocaleEsGq extends LocaleEs
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
