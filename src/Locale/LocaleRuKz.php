<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKz;

/**
 * @psalm-immutable
 */
class LocaleRuKz extends LocaleRu
{
    public function territory(): TerritoryKz
    {
        return new TerritoryKz();
    }
}
