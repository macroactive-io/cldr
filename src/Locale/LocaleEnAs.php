<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAs;

/**
 * @psalm-immutable
 */
class LocaleEnAs extends LocaleEn
{
    public function territory(): TerritoryAs
    {
        return new TerritoryAs();
    }
}
