<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUm;

/**
 * Class LocaleEnUm
 * @psalm-immutable
 */
class LocaleEnUm extends LocaleEn
{
    public function territory(): TerritoryUm
    {
        return new TerritoryUm();
    }
}
