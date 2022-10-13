<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySr;

/**
 * Class LocaleNlSr
 * @psalm-immutable
 */
class LocaleNlSr extends LocaleNl
{
    public function territory(): TerritorySr
    {
        return new TerritorySr();
    }
}
