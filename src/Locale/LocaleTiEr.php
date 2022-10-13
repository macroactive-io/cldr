<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleTiEr
 * @psalm-immutable
 */
class LocaleTiEr extends LocaleTi
{
    public function territory(): TerritoryEr
    {
        return new TerritoryEr();
    }
}
