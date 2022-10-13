<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySo;

/**
 * Class LocaleArSo
 */
class LocaleArSo extends LocaleAr
{
    public function territory()
    {
        return new TerritorySo();
    }
}
