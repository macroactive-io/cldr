<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIm;

/**
 * Class LocaleEnIm
 * @psalm-immutable
 */
class LocaleEnIm extends LocaleEn
{
    public function territory(): TerritoryIm
    {
        return new TerritoryIm();
    }
}
