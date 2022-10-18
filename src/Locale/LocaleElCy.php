<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCy;

/**
 * Class LocaleElCy
 * @psalm-immutable
 */
class LocaleElCy extends LocaleEl
{
    public function territory(): TerritoryCy
    {
        return new TerritoryCy();
    }
}
