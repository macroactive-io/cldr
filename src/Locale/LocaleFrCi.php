<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCi;

/**
 * Class LocaleFrCi
 */
class LocaleFrCi extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCi();
    }
}
