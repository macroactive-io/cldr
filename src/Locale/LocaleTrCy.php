<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleTrCy
 * @psalm-immutable
 */
class LocaleTrCy extends LocaleTr
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
