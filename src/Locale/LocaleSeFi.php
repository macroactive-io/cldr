<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Class LocaleSeFi
 * @psalm-immutable
 */
class LocaleSeFi extends LocaleSe
{
    public function territory(): TerritoryFi
    {
        return new TerritoryFi();
    }
}
