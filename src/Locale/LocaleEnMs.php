<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMs;

/**
 * @psalm-immutable
 */
class LocaleEnMs extends LocaleEn
{
    public function territory(): TerritoryMs
    {
        return new TerritoryMs();
    }
}
