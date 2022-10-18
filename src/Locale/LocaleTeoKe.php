<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * @psalm-immutable
 */
class LocaleTeoKe extends LocaleTeo
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
