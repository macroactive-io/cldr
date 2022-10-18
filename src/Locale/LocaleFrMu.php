<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMu;

/**
 * @psalm-immutable
 */
class LocaleFrMu extends LocaleFr
{
    public function territory(): TerritoryMu
    {
        return new TerritoryMu();
    }
}
