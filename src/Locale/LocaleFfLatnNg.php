<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnNg extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryNg();
    }
}
