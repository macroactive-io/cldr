<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySy;

/**
 * Class LocaleArSy
 */
class LocaleArSy extends LocaleAr
{
    public function territory()
    {
        return new TerritorySy();
    }
}
