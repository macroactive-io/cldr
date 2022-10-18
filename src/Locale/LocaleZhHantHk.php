<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryHk;

/**
 * @psalm-immutable
 */
class LocaleZhHantHk extends LocaleZhHant
{
    public function territory(): TerritoryHk
    {
        return new TerritoryHk();
    }
}
