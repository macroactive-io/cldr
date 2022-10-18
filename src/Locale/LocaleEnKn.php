<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKn;

/**
 * Class LocaleEnKn
 * @psalm-immutable
 */
class LocaleEnKn extends LocaleEn
{
    public function territory(): TerritoryKn
    {
        return new TerritoryKn();
    }
}
