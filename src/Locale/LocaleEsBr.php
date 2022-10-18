<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBr;

/**
 * @psalm-immutable
 */
class LocaleEsBr extends LocaleEs
{
    public function territory(): TerritoryBr
    {
        return new TerritoryBr();
    }
}
