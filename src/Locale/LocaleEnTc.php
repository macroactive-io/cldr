<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTc;

/**
 * Class LocaleEnTc
 * @psalm-immutable
 */
class LocaleEnTc extends LocaleEn
{
    public function territory(): TerritoryTc
    {
        return new TerritoryTc();
    }
}
