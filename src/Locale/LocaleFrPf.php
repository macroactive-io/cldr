<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPf;

/**
 * Class LocaleFrPf
 */
class LocaleFrPf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryPf();
    }
}
