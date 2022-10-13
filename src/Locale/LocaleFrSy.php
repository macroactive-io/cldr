<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySy;

/**
 * Class LocaleFrSy
 * @psalm-immutable
 */
class LocaleFrSy extends LocaleFr
{
    public function territory(): TerritorySy
    {
        return new TerritorySy();
    }
}
