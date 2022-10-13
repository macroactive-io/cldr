<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySh;

/**
 * Class LocaleEnSh
 * @psalm-immutable
 */
class LocaleEnSh extends LocaleEn
{
    public function territory(): TerritorySh
    {
        return new TerritorySh();
    }
}
