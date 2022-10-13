<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LocaleArSa
 */
class LocaleArSa extends LocaleAr
{
    public function territory()
    {
        return new TerritorySa();
    }
}
