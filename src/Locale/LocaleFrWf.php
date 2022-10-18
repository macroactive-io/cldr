<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryWf;

/**
 * Class LocaleFrWf
 * @psalm-immutable
 */
class LocaleFrWf extends LocaleFr
{
    public function territory(): TerritoryWf
    {
        return new TerritoryWf();
    }
}
