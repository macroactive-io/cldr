<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleEnCm
 */
class LocaleEnCm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCm();
    }
}
