<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySy;

/**
 * Class LocaleFrSy
 */
class LocaleFrSy extends LocaleFr
{
    public function territory()
    {
        return new TerritorySy();
    }
}
