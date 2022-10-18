<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAi;

/**
 * @psalm-immutable
 */
class LocaleEnAi extends LocaleEn
{
    public function territory(): TerritoryAi
    {
        return new TerritoryAi();
    }
}
