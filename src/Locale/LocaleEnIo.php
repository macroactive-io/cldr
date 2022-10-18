<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIo;

/**
 * @psalm-immutable
 */
class LocaleEnIo extends LocaleEn
{
    public function territory(): TerritoryIo
    {
        return new TerritoryIo();
    }
}
