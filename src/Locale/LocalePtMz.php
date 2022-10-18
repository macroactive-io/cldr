<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMz;

/**
 * Class LocalePtMz
 * @psalm-immutable
 */
class LocalePtMz extends LocalePt
{
    public function territory(): TerritoryMz
    {
        return new TerritoryMz();
    }
}
