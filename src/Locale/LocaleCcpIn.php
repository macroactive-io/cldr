<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LocaleCcpIn - Chakma
 * @psalm-immutable
 */
class LocaleCcpIn extends LocaleCcp
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
