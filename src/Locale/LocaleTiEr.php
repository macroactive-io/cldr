<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleTiEr
 */
class LocaleTiEr extends LocaleTi
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
