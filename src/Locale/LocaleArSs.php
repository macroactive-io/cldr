<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleArSs
 * @psalm-immutable
 */
class LocaleArSs extends LocaleAr
{
    public function territory(): TerritorySs
    {
        return new TerritorySs();
    }
}
