<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLk;

/**
 * Class LocaleTaLk
 * @psalm-immutable
 */
class LocaleTaLk extends LocaleTa
{
    public function territory(): TerritoryLk
    {
        return new TerritoryLk();
    }
}
