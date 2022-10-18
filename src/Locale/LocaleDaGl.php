<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGl;

/**
 * Class LocaleDaGl
 * @psalm-immutable
 */
class LocaleDaGl extends LocaleDa
{
    public function territory(): TerritoryGl
    {
        return new TerritoryGl();
    }
}
