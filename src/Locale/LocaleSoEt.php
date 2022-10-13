<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LocaleSoEt
 */
class LocaleSoEt extends LocaleSo
{
    public function territory()
    {
        return new TerritoryEt();
    }
}
