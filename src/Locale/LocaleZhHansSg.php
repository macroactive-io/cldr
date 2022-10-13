<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleZhHansSg
 */
class LocaleZhHansSg extends LocaleZh
{
    public function territory()
    {
        return new TerritorySg();
    }
}
