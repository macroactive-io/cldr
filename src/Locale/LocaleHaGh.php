<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Class LocaleHaGh
 * @psalm-immutable
 */
class LocaleHaGh extends LocaleHa
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
