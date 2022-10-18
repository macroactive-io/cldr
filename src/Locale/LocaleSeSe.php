<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySe;

/**
 * @psalm-immutable
 */
class LocaleSeSe extends LocaleSe
{
    public function territory(): TerritorySe
    {
        return new TerritorySe();
    }
}
