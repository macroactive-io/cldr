<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIr;

/**
 * Class LocaleCkbIr - Sorani
 * @psalm-immutable
 */
class LocaleCkbIr extends LocaleCkb
{
    public function territory(): TerritoryIr
    {
        return new TerritoryIr();
    }
}
