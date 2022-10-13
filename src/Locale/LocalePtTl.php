<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTl;

/**
 * Class LocalePtTl
 */
class LocalePtTl extends LocalePt
{
    public function territory()
    {
        return new TerritoryTl();
    }
}
