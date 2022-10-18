<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAo;

/**
 * Class LocalePtAo
 * @psalm-immutable
 */
class LocalePtAo extends LocalePt
{
    public function territory(): TerritoryAo
    {
        return new TerritoryAo();
    }
}
