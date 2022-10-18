<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMd;

/**
 * Class LocaleRuMd
 * @psalm-immutable
 */
class LocaleRuMd extends LocaleRu
{
    public function territory(): TerritoryMd
    {
        return new TerritoryMd();
    }
}
