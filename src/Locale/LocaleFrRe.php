<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryRe;

/**
 * Class LocaleFrRe
 * @psalm-immutable
 */
class LocaleFrRe extends LocaleFr
{
    public function territory(): TerritoryRe
    {
        return new TerritoryRe();
    }
}
