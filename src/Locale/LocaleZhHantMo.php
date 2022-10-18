<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMo;

/**
 * @psalm-immutable
 */
class LocaleZhHantMo extends LocaleZhHant
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
