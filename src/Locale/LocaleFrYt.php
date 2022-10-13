<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYt;

/**
 * Class LocaleFrYt
 */
class LocaleFrYt extends LocaleFr
{
    public function territory()
    {
        return new TerritoryYt();
    }
}
