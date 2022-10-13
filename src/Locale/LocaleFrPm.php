<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPm;

/**
 * Class LocaleFrPm
 */
class LocaleFrPm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryPm();
    }
}
