<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMe;

/**
 * Class LocaleSrLatnMe
 * @psalm-immutable
 */
class LocaleSrLatnMe extends LocaleSrLatn
{
    public function territory(): TerritoryMe
    {
        return new TerritoryMe();
    }
}
