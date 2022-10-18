<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryXk;

/**
 * Class LocaleSrCyrlXk
 * @psalm-immutable
 */
class LocaleSrCyrlXk extends LocaleSrCyrl
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
