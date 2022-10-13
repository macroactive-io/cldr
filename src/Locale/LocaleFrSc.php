<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleFrSc
 */
class LocaleFrSc extends LocaleFr
{
    public function territory()
    {
        return new TerritorySc();
    }
}
