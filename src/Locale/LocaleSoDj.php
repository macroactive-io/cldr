<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleSoDj
 * @psalm-immutable
 */
class LocaleSoDj extends LocaleSo
{
    public function territory(): TerritoryDj
    {
        return new TerritoryDj();
    }
}
