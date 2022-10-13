<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleFrSc
 * @psalm-immutable
 */
class LocaleFrSc extends LocaleFr
{
    public function territory(): TerritorySc
    {
        return new TerritorySc();
    }
}
