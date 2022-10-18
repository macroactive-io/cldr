<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNe;

/**
 * Class LocaleFrNe
 * @psalm-immutable
 */
class LocaleFrNe extends LocaleFr
{
    public function territory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
