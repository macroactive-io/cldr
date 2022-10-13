<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBl;

/**
 * Class LocaleFrBl
 */
class LocaleFrBl extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBl();
    }
}
