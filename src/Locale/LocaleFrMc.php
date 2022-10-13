<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMc;

/**
 * Class LocaleFrMc
 */
class LocaleFrMc extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMc();
    }
}
