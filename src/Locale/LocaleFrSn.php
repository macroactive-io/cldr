<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LocaleFrSn
 */
class LocaleFrSn extends LocaleFr
{
    public function territory()
    {
        return new TerritorySn();
    }
}
