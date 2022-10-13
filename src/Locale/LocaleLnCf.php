<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LocaleLnCf
 * @psalm-immutable
 */
class LocaleLnCf extends LocaleLn
{
    public function territory(): TerritoryCf
    {
        return new TerritoryCf();
    }
}
