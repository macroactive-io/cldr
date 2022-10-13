<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LocaleFrGn
 */
class LocaleFrGn extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGn();
    }
}
