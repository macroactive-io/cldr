<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LocaleFrMg
 */
class LocaleFrMg extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMg();
    }
}
