<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPh;

/**
 * @psalm-immutable
 */
class LocaleEsPh extends LocaleEs
{
    public function territory(): TerritoryPh
    {
        return new TerritoryPh();
    }
}
