<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCc;

/**
 * Class LocaleEnCc
 */
class LocaleEnCc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCc();
    }
}
