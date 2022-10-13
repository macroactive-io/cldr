<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCx;

/**
 * Class LocaleEnCx
 * @psalm-immutable
 */
class LocaleEnCx extends LocaleEn
{
    public function territory(): TerritoryCx
    {
        return new TerritoryCx();
    }
}
