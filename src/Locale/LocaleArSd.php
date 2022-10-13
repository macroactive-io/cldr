<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LocaleArSd
 * @psalm-immutable
 */
class LocaleArSd extends LocaleAr
{
    public function territory(): TerritorySd
    {
        return new TerritorySd();
    }
}
