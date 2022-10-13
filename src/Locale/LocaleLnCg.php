<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCg;

/**
 * Class LocaleLnCg
 */
class LocaleLnCg extends LocaleLn
{
    public function territory()
    {
        return new TerritoryCg();
    }
}
