<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBh;

/**
 * Class LocaleArBh
 * @psalm-immutable
 */
class LocaleArBh extends LocaleAr
{
    public function territory(): TerritoryBh
    {
        return new TerritoryBh();
    }
}
