<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDj;

/**
 * @psalm-immutable
 */
class LocaleSoDj extends LocaleSo
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
