<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Class LocaleEnGh
 * @psalm-immutable
 */
class LocaleEnGh extends LocaleEn
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
