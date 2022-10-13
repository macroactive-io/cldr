<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleEnSc
 * @psalm-immutable
 */
class LocaleEnSc extends LocaleEn
{
    public function territory(): TerritorySc
    {
        return new TerritorySc();
    }
}
