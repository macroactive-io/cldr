<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleEnSx
 * @psalm-immutable
 */
class LocaleEnSx extends LocaleEn
{
    public function territory(): TerritorySx
    {
        return new TerritorySx();
    }
}
