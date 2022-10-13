<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

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
