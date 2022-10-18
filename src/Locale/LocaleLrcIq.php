<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIq;

/**
 * Luri
 *
 * @psalm-immutable
 */
class LocaleLrcIq extends LocaleLrc
{
    public function territory(): TerritoryIq
    {
        return new TerritoryIq();
    }
}
