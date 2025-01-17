<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKp;

/**
 * @psalm-immutable
 */
class LocaleKoKp extends LocaleKo
{
    public function territory(): TerritoryKp
    {
        return new TerritoryKp();
    }
}
