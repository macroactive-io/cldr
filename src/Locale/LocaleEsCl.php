<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCl;

/**
 * Class LocaleEsCl
 */
class LocaleEsCl extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCl();
    }
}
