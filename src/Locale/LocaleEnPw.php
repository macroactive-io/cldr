<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryPw;

/**
 * Class LocaleEnPw
 * @psalm-immutable
 */
class LocaleEnPw extends LocaleEn
{
    public function territory(): TerritoryPw
    {
        return new TerritoryPw();
    }
}
