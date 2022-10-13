<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleCaIt
 */
class LocaleCaIt extends LocaleCa
{
    public function territory()
    {
        return new TerritoryIt();
    }
}
