<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLu;

/**
 * @psalm-immutable
 */
class LocaleDeLu extends LocaleDe
{
    public function territory(): TerritoryLu
    {
        return new TerritoryLu();
    }
}
