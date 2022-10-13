<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySm;

/**
 * Class LocaleItSm
 * @psalm-immutable
 */
class LocaleItSm extends LocaleIt
{
    public function territory(): TerritorySm
    {
        return new TerritorySm();
    }
}
