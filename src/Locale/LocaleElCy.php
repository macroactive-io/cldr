<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleElCy
 */
class LocaleElCy extends LocaleEl
{
    public function territory()
    {
        return new TerritoryCy();
    }
}
