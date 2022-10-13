<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleFfLatn - Fulah
 * @psalm-immutable
 */
class LocaleFfLatnGh extends LocaleFfLatn
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
