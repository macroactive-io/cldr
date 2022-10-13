<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySz;

/**
 * Class LocaleEnSz
 */
class LocaleEnSz extends LocaleEn
{
    public function territory()
    {
        return new TerritorySz();
    }
}
