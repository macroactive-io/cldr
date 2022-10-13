<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAd;

/**
 * Class LocaleCaAd
 */
class LocaleCaAd extends LocaleCa
{
    public function territory()
    {
        return new TerritoryAd();
    }
}
