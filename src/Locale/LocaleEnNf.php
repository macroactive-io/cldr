<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNf;

/**
 * Class LocaleEnNf
 * @psalm-immutable
 */
class LocaleEnNf extends LocaleEn
{
    public function territory(): TerritoryNf
    {
        return new TerritoryNf();
    }
}
