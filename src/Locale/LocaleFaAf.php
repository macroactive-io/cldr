<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;

/**
 * Class LocaleFaAf
 */
class LocaleFaAf extends LocaleFa
{
    public function territory()
    {
        return new TerritoryAf();
    }
}
