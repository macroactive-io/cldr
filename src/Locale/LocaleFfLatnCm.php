<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnCm extends LocaleFfLatn
{
    public function territory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
