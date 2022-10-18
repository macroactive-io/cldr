<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBb;

/**
 * Class LocaleEnBb
 * @psalm-immutable
 */
class LocaleEnBb extends LocaleEn
{
    public function territory(): TerritoryBb
    {
        return new TerritoryBb();
    }
}
