<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleEnSc
 */
class LocaleEnSc extends LocaleEn
{
    public function territory()
    {
        return new TerritorySc();
    }
}
