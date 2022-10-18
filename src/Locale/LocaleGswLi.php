<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLi;

/**
 * Class LocaleGswLi
 * @psalm-immutable
 */
class LocaleGswLi extends LocaleGsw
{
    public function territory(): TerritoryLi
    {
        return new TerritoryLi();
    }
}
