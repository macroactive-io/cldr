<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LocaleFrCf
 * @psalm-immutable
 */
class LocaleFrCf extends LocaleFr
{
    public function territory(): TerritoryCf
    {
        return new TerritoryCf();
    }
}
