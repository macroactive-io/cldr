<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFk;

/**
 * @psalm-immutable
 */
class LocaleEnFk extends LocaleEn
{
    public function territory(): TerritoryFk
    {
        return new TerritoryFk();
    }
}
