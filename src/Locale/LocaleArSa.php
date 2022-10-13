<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LocaleArSa
 * @psalm-immutable
 */
class LocaleArSa extends LocaleAr
{
    public function territory(): TerritorySa
    {
        return new TerritorySa();
    }
}
