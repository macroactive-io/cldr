<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMw;

/**
 * Class LocaleNyMw
 * @psalm-immutable
 */
class LocaleNyMw extends LocaleNy
{
    public function territory(): TerritoryMw
    {
        return new TerritoryMw();
    }
}
