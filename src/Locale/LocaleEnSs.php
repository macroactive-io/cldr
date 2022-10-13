<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleEnSs
 * @psalm-immutable
 */
class LocaleEnSs extends LocaleEn
{
    public function territory(): TerritorySs
    {
        return new TerritorySs();
    }
}
