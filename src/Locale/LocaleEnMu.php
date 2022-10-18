<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMu;

/**
 * @psalm-immutable
 */
class LocaleEnMu extends LocaleEn
{
    public function territory(): TerritoryMu
    {
        return new TerritoryMu();
    }
}
