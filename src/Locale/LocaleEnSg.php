<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleEnSg
 */
class LocaleEnSg extends LocaleEn
{
    public function territory()
    {
        return new TerritorySg();
    }
}
