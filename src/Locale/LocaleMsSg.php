<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySg;

/**
 * Class LocaleMsSg
 * @psalm-immutable
 */
class LocaleMsSg extends LocaleMs
{
    public function territory(): TerritorySg
    {
        return new TerritorySg();
    }
}
