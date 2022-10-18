<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAw;

/**
 * Class LocaleNlAw
 * @psalm-immutable
 */
class LocaleNlAw extends LocaleNl
{
    public function territory(): TerritoryAw
    {
        return new TerritoryAw();
    }
}
