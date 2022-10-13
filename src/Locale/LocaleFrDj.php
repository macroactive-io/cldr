<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleFrDj
 */
class LocaleFrDj extends LocaleFr
{
    public function territory()
    {
        return new TerritoryDj();
    }
}
