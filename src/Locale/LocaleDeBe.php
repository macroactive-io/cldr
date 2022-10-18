<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBe;

/**
 * @psalm-immutable
 */
class LocaleDeBe extends LocaleDe
{
    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }
}
