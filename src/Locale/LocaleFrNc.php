<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNc;

/**
 * Class LocaleFrNc
 * @psalm-immutable
 */
class LocaleFrNc extends LocaleFr
{
    public function territory(): TerritoryNc
    {
        return new TerritoryNc();
    }
}
