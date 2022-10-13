<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCi;

/**
 * Class LocaleFrCi
 * @psalm-immutable
 */
class LocaleFrCi extends LocaleFr
{
    public function territory(): TerritoryCi
    {
        return new TerritoryCi();
    }
}
