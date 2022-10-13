<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleSvFi
 */
class LocaleSvFi extends LocaleSv
{
    public function territory()
    {
        return new TerritoryFi();
    }
}
