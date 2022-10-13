<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMe;

/**
 * Class LocaleSrCyrlMe
 * @psalm-immutable
 */
class LocaleSrCyrlMe extends LocaleSrCyrl
{
    public function territory(): TerritoryMe
    {
        return new TerritoryMe();
    }
}
