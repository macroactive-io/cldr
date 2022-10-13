<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleEnSg
 * @psalm-immutable
 */
class LocaleEnSg extends LocaleEn
{
    public function territory(): TerritorySg
    {
        return new TerritorySg();
    }
}
