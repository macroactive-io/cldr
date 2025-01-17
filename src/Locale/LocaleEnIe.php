<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIe;

/**
 * @psalm-immutable
 */
class LocaleEnIe extends LocaleEn
{
    public function territory(): TerritoryIe
    {
        return new TerritoryIe();
    }
}
