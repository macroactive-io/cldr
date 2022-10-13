<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LocaleEnSd
 */
class LocaleEnSd extends LocaleEn
{
    public function territory()
    {
        return new TerritorySd();
    }
}
