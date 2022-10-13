<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleSeFi
 */
class LocaleSeFi extends LocaleSe
{
    public function territory()
    {
        return new TerritoryFi();
    }
}
