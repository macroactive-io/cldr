<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LocaleSsZa
 */
class LocaleSsZa extends LocaleSs
{
    public function territory()
    {
        return new TerritoryZa();
    }
}
