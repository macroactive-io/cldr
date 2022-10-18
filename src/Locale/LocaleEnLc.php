<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLc;

/**
 * @psalm-immutable
 */
class LocaleEnLc extends LocaleEn
{
    public function territory(): TerritoryLc
    {
        return new TerritoryLc();
    }
}
