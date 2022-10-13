<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySr;

/**
 * Class LocaleNlSr
 */
class LocaleNlSr extends LocaleNl
{
    public function territory()
    {
        return new TerritorySr();
    }
}
