<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySb;

/**
 * Class LocaleEnSb
 */
class LocaleEnSb extends LocaleEn
{
    public function territory()
    {
        return new TerritorySb();
    }
}
