<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMy;

/**
 * Class LocaleTaMy
 * @psalm-immutable
 */
class LocaleTaMy extends LocaleTa
{
    public function territory(): TerritoryMy
    {
        return new TerritoryMy();
    }

    protected function digitsGroup(): int
    {
        return 3;
    }
}
