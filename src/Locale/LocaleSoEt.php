<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEt;

/**
 * @psalm-immutable
 */
class LocaleSoEt extends LocaleSo
{
    public function territory(): TerritoryEt
    {
        return new TerritoryEt();
    }
}
