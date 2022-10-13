<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGp;

/**
 * Class LocaleFrGp
 */
class LocaleFrGp extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGp();
    }
}
