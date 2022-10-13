<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleCaIt
 * @psalm-immutable
 */
class LocaleCaIt extends LocaleCa
{
    public function territory(): TerritoryIt
    {
        return new TerritoryIt();
    }
}
