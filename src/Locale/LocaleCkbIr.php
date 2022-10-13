<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LocaleCkbIr - Sorani
 * @psalm-immutable
 */
class LocaleCkbIr extends LocaleCkb
{
    public function territory(): TerritoryIr
    {
        return new TerritoryIr();
    }
}
