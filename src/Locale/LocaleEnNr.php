<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNr;

/**
 * Class LocaleEnNr
 * @psalm-immutable
 */
class LocaleEnNr extends LocaleEn
{
    public function territory(): TerritoryNr
    {
        return new TerritoryNr();
    }
}
