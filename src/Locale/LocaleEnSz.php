<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySz;

/**
 * Class LocaleEnSz
 * @psalm-immutable
 */
class LocaleEnSz extends LocaleEn
{
    public function territory(): TerritorySz
    {
        return new TerritorySz();
    }
}
