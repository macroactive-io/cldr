<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBi;

/**
 * Class LocaleEnBi
 * @psalm-immutable
 */
class LocaleEnBi extends LocaleEn
{
    public function territory(): TerritoryBi
    {
        return new TerritoryBi();
    }
}
