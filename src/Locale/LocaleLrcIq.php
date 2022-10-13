<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LocaleLrc - Luri
 */
class LocaleLrcIq extends LocaleLrc
{
    public function territory()
    {
        return new TerritoryIq();
    }
}
