<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCw;

/**
 * Class LocaleNlCw
 * @psalm-immutable
 */
class LocaleNlCw extends LocaleNl
{
    public function territory(): TerritoryCw
    {
        return new TerritoryCw();
    }
}
