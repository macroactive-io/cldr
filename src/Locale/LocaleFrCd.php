<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LocaleFrCd
 */
class LocaleFrCd extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCd();
    }
}
