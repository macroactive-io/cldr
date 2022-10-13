<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCx;

/**
 * Class LocaleEnCx
 */
class LocaleEnCx extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCx();
    }
}
