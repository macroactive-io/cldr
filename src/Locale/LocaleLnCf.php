<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LocaleLnCf
 */
class LocaleLnCf extends LocaleLn
{
    public function territory()
    {
        return new TerritoryCf();
    }
}
