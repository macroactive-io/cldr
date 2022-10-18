<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LocaleBnIn
 * @psalm-immutable
 */
class LocaleBnIn extends LocaleBn
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
