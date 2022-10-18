<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryFr;

/**
 * Class LocaleGswFr
 * @psalm-immutable
 */
class LocaleGswFr extends LocaleGsw
{
    public function territory(): TerritoryFr
    {
        return new TerritoryFr();
    }
}
