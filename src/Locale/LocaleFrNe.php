<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleFrNe
 */
class LocaleFrNe extends LocaleFr
{
    public function territory()
    {
        return new TerritoryNe();
    }
}
