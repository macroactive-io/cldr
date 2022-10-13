<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LocaleFrMl
 */
class LocaleFrMl extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMl();
    }
}
