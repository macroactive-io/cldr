<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocaleFrGq
 */
class LocaleFrGq extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGq();
    }
}
