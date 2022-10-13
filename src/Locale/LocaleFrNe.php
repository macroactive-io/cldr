<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleFrNe
 * @psalm-immutable
 */
class LocaleFrNe extends LocaleFr
{
    public function territory(): TerritoryNe
    {
        return new TerritoryNe();
    }
}
