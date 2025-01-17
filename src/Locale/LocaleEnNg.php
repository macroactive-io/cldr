<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * @psalm-immutable
 */
class LocaleEnNg extends LocaleEn
{
    public function territory(): TerritoryNg
    {
        return new TerritoryNg();
    }
}
