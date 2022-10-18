<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAo;

/**
 * @psalm-immutable
 */
class LocaleLnAo extends LocaleLn
{
    public function territory(): TerritoryAo
    {
        return new TerritoryAo();
    }
}
