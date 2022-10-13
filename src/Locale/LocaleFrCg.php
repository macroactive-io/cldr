<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCg;

/**
 * Class LocaleFrCg
 * @psalm-immutable
 */
class LocaleFrCg extends LocaleFr
{
    public function territory(): TerritoryCg
    {
        return new TerritoryCg();
    }
}
