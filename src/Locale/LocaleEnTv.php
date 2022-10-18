<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTv;

/**
 * Class LocaleEnTv
 * @psalm-immutable
 */
class LocaleEnTv extends LocaleEn
{
    public function territory(): TerritoryTv
    {
        return new TerritoryTv();
    }
}
