<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLb;

/**
 * Class LocaleArLb
 * @psalm-immutable
 */
class LocaleArLb extends LocaleAr
{
    public function territory(): TerritoryLb
    {
        return new TerritoryLb();
    }
}
