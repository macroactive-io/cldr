<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBz;

/**
 * Class LocaleEsBz
 * @psalm-immutable
 */
class LocaleEsBz extends LocaleEs
{
    public function territory(): TerritoryBz
    {
        return new TerritoryBz();
    }
}
