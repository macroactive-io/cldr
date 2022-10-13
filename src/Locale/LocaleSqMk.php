<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMk;

/**
 * Class LocaleSqMk
 * @psalm-immutable
 */
class LocaleSqMk extends LocaleSq
{
    public function territory(): TerritoryMk
    {
        return new TerritoryMk();
    }
}
