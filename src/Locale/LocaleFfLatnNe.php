<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFfLatnNe extends LocaleFfLatn
{
    public function territory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
