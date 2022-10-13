<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleEnCy
 * @psalm-immutable
 */
class LocaleEnCy extends LocaleEn
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
