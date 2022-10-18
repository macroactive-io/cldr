<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBe;

/**
 * Class LocaleFrBe
 * @psalm-immutable
 */
class LocaleFrBe extends LocaleFr
{
    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }
}
