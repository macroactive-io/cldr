<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrLatnXk
 */
class LocaleSrLatnXk extends LocaleSrLatn
{
    public function territory()
    {
        return new TerritoryXk();
    }
}
