<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LocaleFoDk
 * @psalm-immutable
 */
class LocaleFoDk extends LocaleFo
{
    public function territory(): TerritoryDk
    {
        return new TerritoryDk();
    }
}
