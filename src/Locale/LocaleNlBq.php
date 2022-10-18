<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBq;

/**
 * @psalm-immutable
 */
class LocaleNlBq extends LocaleNl
{
    public function territory(): TerritoryBq
    {
        return new TerritoryBq();
    }
}
