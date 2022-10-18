<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Class LocaleEnCh
 * @psalm-immutable
 */
class LocaleEnCh extends LocaleEn
{
    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }
}
