<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMq;

/**
 * Class LocaleFrMq
 */
class LocaleFrMq extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMq();
    }
}
