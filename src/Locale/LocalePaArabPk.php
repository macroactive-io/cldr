<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPk;

/**
 * @psalm-immutable
 */
class LocalePaArabPk extends LocalePaArab
{
    public function territory(): TerritoryPk
    {
        return new TerritoryPk();
    }
}
