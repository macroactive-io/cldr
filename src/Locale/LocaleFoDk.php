<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LocaleFoDk
 */
class LocaleFoDk extends LocaleFo
{
    public function territory()
    {
        return new TerritoryDk();
    }
}
