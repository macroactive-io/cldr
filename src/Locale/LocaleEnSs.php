<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleEnSs
 */
class LocaleEnSs extends LocaleEn
{
    public function territory()
    {
        return new TerritorySs();
    }
}
