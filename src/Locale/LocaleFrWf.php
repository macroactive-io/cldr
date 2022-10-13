<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWf;

/**
 * Class LocaleFrWf
 * @psalm-immutable
 */
class LocaleFrWf extends LocaleFr
{
    public function territory(): TerritoryWf
    {
        return new TerritoryWf();
    }
}
