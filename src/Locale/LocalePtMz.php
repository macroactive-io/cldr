<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMz;

/**
 * Class LocalePtMz
 * @psalm-immutable
 */
class LocalePtMz extends LocalePt
{
    public function territory(): TerritoryMz
    {
        return new TerritoryMz();
    }
}
