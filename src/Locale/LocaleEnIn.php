<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * @psalm-immutable
 */
class LocaleEnIn extends LocaleEn
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
