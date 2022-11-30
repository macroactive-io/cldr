<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAe;

/**
 * Class LocaleEnAe
 *
 * @psalm-immutable
 */
class LocaleEnAe extends LocaleEn
{
    public function territory(): TerritoryAe
    {
        return new TerritoryAe();
    }
}
