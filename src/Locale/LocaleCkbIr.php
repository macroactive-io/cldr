<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LocaleCkbIr - Sorani
 */
class LocaleCkbIr extends LocaleCkb
{
    public function territory()
    {
        return new TerritoryIr();
    }
}
