<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGe;

/**
 * Class LocaleOsGe
 */
class LocaleOsGe extends LocaleOs
{
    public function territory()
    {
        return new TerritoryGe();
    }
}
