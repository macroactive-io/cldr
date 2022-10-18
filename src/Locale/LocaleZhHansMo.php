<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMo;

/**
 * @psalm-immutable
 */
class LocaleZhHansMo extends LocaleZh
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
