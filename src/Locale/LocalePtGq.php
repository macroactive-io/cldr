<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocalePtGq
 */
class LocalePtGq extends LocalePt
{
    public function territory()
    {
        return new TerritoryGq();
    }
}
