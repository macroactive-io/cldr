<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPh;

/**
 * @psalm-immutable
 */
class LocaleEnPh extends LocaleEn
{
    public function territory(): TerritoryPh
    {
        return new TerritoryPh();
    }
}
