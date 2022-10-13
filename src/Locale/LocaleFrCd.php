<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LocaleFrCd
 * @psalm-immutable
 */
class LocaleFrCd extends LocaleFr
{
    public function territory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
