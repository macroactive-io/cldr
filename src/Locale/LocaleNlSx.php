<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleNlSx
 */
class LocaleNlSx extends LocaleNl
{
    public function territory()
    {
        return new TerritorySx();
    }
}
