<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMr;

/**
 * Class LocaleFfAdlmMr - Fulah
 *
 * @psalm-immutable
 */
class LocaleFfAdlmMr extends LocaleFfAdlm
{
    public function territory(): TerritoryMr
    {
        return new TerritoryMr();
    }
}
