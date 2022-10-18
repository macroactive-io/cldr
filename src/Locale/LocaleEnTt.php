<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTt;

/**
 * Class LocaleEnTt
 * @psalm-immutable
 */
class LocaleEnTt extends LocaleEn
{
    public function territory(): TerritoryTt
    {
        return new TerritoryTt();
    }
}
