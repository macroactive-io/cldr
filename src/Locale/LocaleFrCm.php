<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleFrCm
 */
class LocaleFrCm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCm();
    }
}
