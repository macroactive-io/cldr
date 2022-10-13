<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrLatnXk
 * @psalm-immutable
 */
class LocaleSrLatnXk extends LocaleSrLatn
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
