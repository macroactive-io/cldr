<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMo;

/**
 * Class LocalePtMo
 * @psalm-immutable
 */
class LocalePtMo extends LocalePt
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
