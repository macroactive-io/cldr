<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleCcpIn - Chakma
 * @psalm-immutable
 */
class LocaleCcpIn extends LocaleCcp
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
