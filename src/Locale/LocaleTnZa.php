<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LocaleTnZa
 * @psalm-immutable
 */
class LocaleTnZa extends LocaleTn
{
    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
