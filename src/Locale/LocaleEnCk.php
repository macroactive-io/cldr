<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCk;

/**
 * Class LocaleEnCk
 */
class LocaleEnCk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCk();
    }
}
