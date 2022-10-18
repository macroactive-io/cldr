<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDm;

/**
 * @psalm-immutable
 */
class LocaleEnDm extends LocaleEn
{
    public function territory(): TerritoryDm
    {
        return new TerritoryDm();
    }
}
