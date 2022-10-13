<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleElCy
 * @psalm-immutable
 */
class LocaleElCy extends LocaleEl
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
