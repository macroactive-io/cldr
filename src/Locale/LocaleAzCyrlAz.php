<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAz;

/**
 * Class LocaleAzCyrlAz
 * @psalm-immutable
 */
class LocaleAzCyrlAz extends LocaleAzCyrl
{
    public function territory(): TerritoryAz
    {
        return new TerritoryAz();
    }
}
