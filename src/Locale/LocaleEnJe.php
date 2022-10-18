<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryJe;

/**
 * Class LocaleEnJe
 * @psalm-immutable
 */
class LocaleEnJe extends LocaleEn
{
    public function territory(): TerritoryJe
    {
        return new TerritoryJe();
    }
}
