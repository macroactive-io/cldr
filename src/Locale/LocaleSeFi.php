<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleSeFi
 * @psalm-immutable
 */
class LocaleSeFi extends LocaleSe
{
    public function territory(): TerritoryFi
    {
        return new TerritoryFi();
    }
}
