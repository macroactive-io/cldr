<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCv;

/**
 * @psalm-immutable
 */
class LocalePtCv extends LocalePt
{
    public function territory(): TerritoryCv
    {
        return new TerritoryCv();
    }
}
