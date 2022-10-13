<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;

/**
 * Class LocaleFaAf
 * @psalm-immutable
 */
class LocaleFaAf extends LocaleFa
{
    public function territory(): TerritoryAf
    {
        return new TerritoryAf();
    }
}
