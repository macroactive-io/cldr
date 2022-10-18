<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySt;

/**
 * @psalm-immutable
 */
class LocalePtSt extends LocalePt
{
    public function territory(): TerritorySt
    {
        return new TerritorySt();
    }
}
