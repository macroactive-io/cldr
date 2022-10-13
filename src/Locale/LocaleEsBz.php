<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEsBz
 */
class LocaleEsBz extends LocaleEs
{
    public function territory()
    {
        return new TerritoryBz();
    }
}
