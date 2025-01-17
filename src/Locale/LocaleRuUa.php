<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUa;

/**
 * @psalm-immutable
 */
class LocaleRuUa extends LocaleRu
{
    public function territory(): TerritoryUa
    {
        return new TerritoryUa();
    }
}
