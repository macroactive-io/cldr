<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySj;

/**
 * Class LocaleNbSj
 */
class LocaleNbSj extends LocaleNb
{
    public function territory()
    {
        return new TerritorySj();
    }
}
