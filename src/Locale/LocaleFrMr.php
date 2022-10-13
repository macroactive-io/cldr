<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFrMr
 */
class LocaleFrMr extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMr();
    }
}
