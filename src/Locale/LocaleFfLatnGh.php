<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleFfLatn - Fulah
 */
class LocaleFfLatnGh extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryGh();
    }
}
