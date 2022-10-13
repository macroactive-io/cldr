<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySb;

/**
 * Class LocaleEnSb
 * @psalm-immutable
 */
class LocaleEnSb extends LocaleEn
{
    public function territory(): TerritorySb
    {
        return new TerritorySb();
    }
}
