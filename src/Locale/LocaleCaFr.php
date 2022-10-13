<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LocaleCaFr
 * @psalm-immutable
 */
class LocaleCaFr extends LocaleCa
{
    public function territory(): TerritoryFr
    {
        return new TerritoryFr();
    }
}
