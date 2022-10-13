<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LocaleTnZa
 */
class LocaleTnZa extends LocaleTn
{
    public function territory()
    {
        return new TerritoryZa();
    }
}
