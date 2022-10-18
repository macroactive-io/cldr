<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDj;

/**
 * Class LocaleSoDj
 * @psalm-immutable
 */
class LocaleSoDj extends LocaleSo
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
