<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LocaleFrDz
 */
class LocaleFrDz extends LocaleFr
{
    public function territory()
    {
        return new TerritoryDz();
    }
}
