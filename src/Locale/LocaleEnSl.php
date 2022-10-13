<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySl;

/**
 * Class LocaleEnSl
 * @psalm-immutable
 */
class LocaleEnSl extends LocaleEn
{
    public function territory(): TerritorySl
    {
        return new TerritorySl();
    }
}
