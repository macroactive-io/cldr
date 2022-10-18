<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LocaleNeIn
 * @psalm-immutable
 */
class LocaleNeIn extends LocaleNe
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
