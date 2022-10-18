<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPr;

/**
 * Class LocaleEsPr
 * @psalm-immutable
 */
class LocaleEsPr extends LocaleEs
{
    public function territory(): TerritoryPr
    {
        return new TerritoryPr();
    }
}
