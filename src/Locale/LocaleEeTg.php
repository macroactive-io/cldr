<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTg;

/**
 * Class LocaleEeTg
 * @psalm-immutable
 */
class LocaleEeTg extends LocaleEe
{
    public function territory(): TerritoryTg
    {
        return new TerritoryTg();
    }
}
