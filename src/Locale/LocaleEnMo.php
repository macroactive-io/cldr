<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMo;

/**
 * Class LocaleEnMo
 * @psalm-immutable
 */
class LocaleEnMo extends LocaleEn
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
