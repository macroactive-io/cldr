<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LocaleSoEt
 * @psalm-immutable
 */
class LocaleSoEt extends LocaleSo
{
    public function territory(): TerritoryEt
    {
        return new TerritoryEt();
    }
}
