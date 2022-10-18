<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySg;

/**
 * @psalm-immutable
 */
class LocaleTaSg extends LocaleTa
{
    public function territory(): TerritorySg
    {
        return new TerritorySg();
    }

    protected function digitsGroup(): int
    {
        return 3;
    }
}
