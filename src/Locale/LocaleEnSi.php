<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySi;

/**
 * Class LocaleEnSi - English
 * @psalm-immutable
 */
class LocaleEnSi extends LocaleEn
{
    public function territory(): TerritorySi
    {
        return new TerritorySi();
    }
}
