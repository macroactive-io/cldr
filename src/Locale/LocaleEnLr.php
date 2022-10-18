<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLr;

/**
 * @psalm-immutable
 */
class LocaleEnLr extends LocaleEn
{
    public function territory(): TerritoryLr
    {
        return new TerritoryLr();
    }
}
