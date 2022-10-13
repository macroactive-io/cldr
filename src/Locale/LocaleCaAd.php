<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAd;

/**
 * Class LocaleCaAd
 * @psalm-immutable
 */
class LocaleCaAd extends LocaleCa
{
    public function territory(): TerritoryAd
    {
        return new TerritoryAd();
    }
}
