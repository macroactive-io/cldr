<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMh;

/**
 * @psalm-immutable
 */
class LocaleEnMh extends LocaleEn
{
    public function territory(): TerritoryMh
    {
        return new TerritoryMh();
    }
}
