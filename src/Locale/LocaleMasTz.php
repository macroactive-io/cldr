<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LocaleMasTz
 */
class LocaleMasTz extends LocaleMas
{
    public function territory()
    {
        return new TerritoryTz();
    }
}
