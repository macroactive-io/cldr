<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAx;

/**
 * Class LocaleSvAx
 */
class LocaleSvAx extends LocaleSv
{
    public function territory()
    {
        return new TerritoryAx();
    }
}
