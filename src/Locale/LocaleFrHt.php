<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHt;

/**
 * Class LocaleFrHt
 */
class LocaleFrHt extends LocaleFr
{
    public function territory()
    {
        return new TerritoryHt();
    }
}
