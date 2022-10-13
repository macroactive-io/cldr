<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleNusSd
 */
class LocaleNusSs extends LocaleNus
{
    public function territory()
    {
        return new TerritorySs();
    }
}
