<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSqXk
 * @psalm-immutable
 */
class LocaleSqXk extends LocaleSq
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
