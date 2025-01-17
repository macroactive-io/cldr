<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKw;

/**
 * @psalm-immutable
 */
class LocaleArKw extends LocaleAr
{
    public function territory(): TerritoryKw
    {
        return new TerritoryKw();
    }
}
