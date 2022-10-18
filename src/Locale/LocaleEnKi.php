<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKi;

/**
 * Class LocaleEnKi
 * @psalm-immutable
 */
class LocaleEnKi extends LocaleEn
{
    public function territory(): TerritoryKi
    {
        return new TerritoryKi();
    }
}
