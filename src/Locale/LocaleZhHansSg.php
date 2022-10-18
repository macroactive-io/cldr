<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySg;

/**
 * Class LocaleZhHansSg
 * @psalm-immutable
 */
class LocaleZhHansSg extends LocaleZh
{
    public function territory(): TerritorySg
    {
        return new TerritorySg();
    }
}
