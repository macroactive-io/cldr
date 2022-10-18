<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * @psalm-immutable
 */
class LocaleSvFi extends LocaleSv
{
    public function territory(): TerritoryFi
    {
        return new TerritoryFi();
    }
}
