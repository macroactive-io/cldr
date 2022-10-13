<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCc;

/**
 * Class LocaleEnCc
 * @psalm-immutable
 */
class LocaleEnCc extends LocaleEn
{
    public function territory(): TerritoryCc
    {
        return new TerritoryCc();
    }
}
