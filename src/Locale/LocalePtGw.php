<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGw;

/**
 * Class LocalePtGw
 * @psalm-immutable
 */
class LocalePtGw extends LocalePt
{
    public function territory(): TerritoryGw
    {
        return new TerritoryGw();
    }
}
