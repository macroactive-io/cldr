<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySj;

/**
 * Class LocaleNbSj
 * @psalm-immutable
 */
class LocaleNbSj extends LocaleNb
{
    public function territory(): TerritorySj
    {
        return new TerritorySj();
    }
}
