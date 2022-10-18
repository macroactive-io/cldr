<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTo;

/**
 * @psalm-immutable
 */
class LocaleEnTo extends LocaleEn
{
    public function territory(): TerritoryTo
    {
        return new TerritoryTo();
    }
}
