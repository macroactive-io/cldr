<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryRw;

/**
 * Class LocaleFrRw
 * @psalm-immutable
 */
class LocaleFrRw extends LocaleFr
{
    public function territory(): TerritoryRw
    {
        return new TerritoryRw();
    }
}
