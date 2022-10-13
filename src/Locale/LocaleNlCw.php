<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCw;

/**
 * Class LocaleNlCw
 */
class LocaleNlCw extends LocaleNl
{
    public function territory()
    {
        return new TerritoryCw();
    }
}
