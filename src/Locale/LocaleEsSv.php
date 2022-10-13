<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySv;

/**
 * Class LocaleEsSv
 * @psalm-immutable
 */
class LocaleEsSv extends LocaleEs
{
    public function territory(): TerritorySv
    {
        return new TerritorySv();
    }
}
