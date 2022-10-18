<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryJm;

/**
 * Class LocaleEnJm
 * @psalm-immutable
 */
class LocaleEnJm extends LocaleEn
{
    public function territory(): TerritoryJm
    {
        return new TerritoryJm();
    }
}
