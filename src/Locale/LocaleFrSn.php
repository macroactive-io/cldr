<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LocaleFrSn
 * @psalm-immutable
 */
class LocaleFrSn extends LocaleFr
{
    public function territory(): TerritorySn
    {
        return new TerritorySn();
    }
}
