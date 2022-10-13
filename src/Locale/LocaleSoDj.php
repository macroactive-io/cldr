<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleSoDj
 */
class LocaleSoDj extends LocaleSo
{
    public function territory()
    {
        return new TerritoryDj();
    }
}
