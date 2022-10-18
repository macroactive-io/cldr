<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Class LocaleOmKe
 * @psalm-immutable
 */
class LocaleOmKe extends LocaleOm
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
