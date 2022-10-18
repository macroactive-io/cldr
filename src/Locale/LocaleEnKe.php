<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * @psalm-immutable
 */
class LocaleEnKe extends LocaleEn
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
