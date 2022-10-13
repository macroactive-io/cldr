<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSqXk
 */
class LocaleSqXk extends LocaleSq
{
    public function territory()
    {
        return new TerritoryXk();
    }
}
