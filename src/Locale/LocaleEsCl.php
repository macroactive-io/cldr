<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCl;

/**
 * Class LocaleEsCl
 * @psalm-immutable
 */
class LocaleEsCl extends LocaleEs
{
    public function territory(): TerritoryCl
    {
        return new TerritoryCl();
    }
}
