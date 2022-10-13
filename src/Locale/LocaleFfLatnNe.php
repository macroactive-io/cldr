<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnNe extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryNe();
    }
}
