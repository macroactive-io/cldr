<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEc;

/**
 * Class LocaleQuEc
 * @psalm-immutable
 */
class LocaleQuEc extends LocaleQu
{
    public function territory(): TerritoryEc
    {
        return new TerritoryEc();
    }
}
