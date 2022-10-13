<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LocaleEnSd
 * @psalm-immutable
 */
class LocaleEnSd extends LocaleEn
{
    public function territory(): TerritorySd
    {
        return new TerritorySd();
    }
}
