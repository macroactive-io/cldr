<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDj;

/**
 * Class LocaleAaDj
 * @psalm-immutable
 */
class LocaleAaDj extends LocaleAa
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
