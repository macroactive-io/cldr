<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySy;

/**
 * Class LocaleArSy
 * @psalm-immutable
 */
class LocaleArSy extends LocaleAr
{
    public function territory(): TerritorySy
    {
        return new TerritorySy();
    }
}
