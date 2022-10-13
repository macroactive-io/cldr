<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleNusSd
 * @psalm-immutable
 */
class LocaleNusSs extends LocaleNus
{
    public function territory(): TerritorySs
    {
        return new TerritorySs();
    }
}
