<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LocaleLrc - Luri
 * @psalm-immutable
 */
class LocaleLrcIq extends LocaleLrc
{
    public function territory(): TerritoryIq
    {
        return new TerritoryIq();
    }
}
