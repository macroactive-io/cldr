<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGq;

/**
 * Class LocaleFrGq
 * @psalm-immutable
 */
class LocaleFrGq extends LocaleFr
{
    public function territory(): TerritoryGq
    {
        return new TerritoryGq();
    }
}
