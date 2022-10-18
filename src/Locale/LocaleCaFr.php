<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFr;

/**
 * Class LocaleCaFr
 * @psalm-immutable
 */
class LocaleCaFr extends LocaleCa
{
    public function territory(): TerritoryFr
    {
        return new TerritoryFr();
    }
}
