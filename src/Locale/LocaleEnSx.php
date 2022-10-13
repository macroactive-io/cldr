<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleEnSx
 */
class LocaleEnSx extends LocaleEn
{
    public function territory()
    {
        return new TerritorySx();
    }
}
