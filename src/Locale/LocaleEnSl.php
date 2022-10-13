<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySl;

/**
 * Class LocaleEnSl
 */
class LocaleEnSl extends LocaleEn
{
    public function territory()
    {
        return new TerritorySl();
    }
}
