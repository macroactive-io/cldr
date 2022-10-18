<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * @psalm-immutable
 */
class LocaleSoKe extends LocaleSo
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
