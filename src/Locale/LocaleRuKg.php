<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKg;

/**
 * @psalm-immutable
 */
class LocaleRuKg extends LocaleRu
{
    public function territory(): TerritoryKg
    {
        return new TerritoryKg();
    }
}
