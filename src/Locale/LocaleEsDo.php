<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDo;

/**
 * @psalm-immutable
 */
class LocaleEsDo extends LocaleEs
{
    public function territory(): TerritoryDo
    {
        return new TerritoryDo();
    }
}
