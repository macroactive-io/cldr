<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Class LocaleSwUg
 * @psalm-immutable
 */
class LocaleSwUg extends LocaleSw
{
    public function territory(): TerritoryUg
    {
        return new TerritoryUg();
    }
}
