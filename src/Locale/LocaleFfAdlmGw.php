<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGw;

/**
 * Class LocaleFfAdlmGw - Fulah
 *
 * @psalm-immutable
 */
class LocaleFfAdlmGw extends LocaleFfAdlm
{
    public function territory(): TerritoryGw
    {
        return new TerritoryGw();
    }
}
