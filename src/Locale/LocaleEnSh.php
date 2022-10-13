<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySh;

/**
 * Class LocaleEnSh
 */
class LocaleEnSh extends LocaleEn
{
    public function territory()
    {
        return new TerritorySh();
    }
}
