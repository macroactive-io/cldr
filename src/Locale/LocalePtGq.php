<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGq;

/**
 * @psalm-immutable
 */
class LocalePtGq extends LocalePt
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
