<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPr;

/**
 * Class LocaleEnPr
 * @psalm-immutable
 */
class LocaleEnPr extends LocaleEn
{
    public function territory(): TerritoryPr
    {
        return new TerritoryPr();
    }
}
