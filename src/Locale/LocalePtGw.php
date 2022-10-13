<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;

/**
 * Class LocalePtGw
 */
class LocalePtGw extends LocalePt
{
    public function territory()
    {
        return new TerritoryGw();
    }
}
