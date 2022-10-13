<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySm;

/**
 * Class LocaleItSm
 */
class LocaleItSm extends LocaleIt
{
    public function territory()
    {
        return new TerritorySm();
    }
}
