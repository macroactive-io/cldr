<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleEnCm
 * @psalm-immutable
 */
class LocaleEnCm extends LocaleEn
{
    public function territory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
