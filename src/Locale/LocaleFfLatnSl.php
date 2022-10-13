<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySl;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnSl extends LocaleFfLatn
{
    public function territory(): TerritorySl
    {
        return new TerritorySl();
    }
}
