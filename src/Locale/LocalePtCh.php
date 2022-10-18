<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * @psalm-immutable
 */
class LocalePtCh extends LocalePt
{
    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }
}
