<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTd;

/**
 * Class LocaleFrTd
 */
class LocaleFrTd extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTd();
    }
}
