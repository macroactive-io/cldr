<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Swiss High German
 *
 * @psalm-immutable
 */
class LocaleDeIt extends LocaleDe
{
    public function territory(): TerritoryIt
    {
        return new TerritoryIt();
    }
}
