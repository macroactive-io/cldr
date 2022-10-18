<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEr;

/**
 * Class LocaleTiEr
 * @psalm-immutable
 */
class LocaleTiEr extends LocaleTi
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
