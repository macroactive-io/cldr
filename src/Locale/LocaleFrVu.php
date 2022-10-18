<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryVu;

/**
 * Class LocaleFrVu
 * @psalm-immutable
 */
class LocaleFrVu extends LocaleFr
{
    public function territory(): TerritoryVu
    {
        return new TerritoryVu();
    }
}
