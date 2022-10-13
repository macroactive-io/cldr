<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleNlSx
 * @psalm-immutable
 */
class LocaleNlSx extends LocaleNl
{
    public function territory(): TerritorySx
    {
        return new TerritorySx();
    }
}
