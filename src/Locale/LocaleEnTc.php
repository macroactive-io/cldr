<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTc;

/**
 * @psalm-immutable
 */
class LocaleEnTc extends LocaleEn
{
    public function territory(): TerritoryTc
    {
        return new TerritoryTc();
    }
}
